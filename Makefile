all:
	make webrings
	make quotes
	make references
	make migration
	make site
	make admin
	make migration

generators:
	make webrings
	make quotes
	make references

webrings:
	generators/openring/openring \
	-s "https://drewdevault.com/feed.xml" \
	-s "https://mxb.dev/feed.xml" \
	-s "https://www.taniarascia.com/rss.xml" \
	< generators/openring/template.html \
	> generators/hugo/themes/tdro/layouts/partials/webrings/openring.html

quotes:
	strfile generators/fortune/quotes.fortune

export DENO_DIR := generators/exoference/vendor

references:
	deno compile \
    --allow-net \
    --no-check \
    --output generators/exoference/exoference \
    generators/exoference/main.ts
	find generators/hugo/content/posts -type f -name "*.md" -exec basename --suffix '.md' {} \; \
		| while read -r file; do path="generators/hugo/themes/tdro/layouts/partials/references/$$file.html" \
		&& printf 'Gathering references for %s\n' "$$file" && [ ! -e "$$path" ] \
		&& generators/exoference/exoference "$$(printf 'https://thedroneely.com/posts/%s/\n' "$$file")" > \
		"$$path" || true ; done

site:
	ln -sfT ../../public generators/hugo/public
	cd generators/hugo && hugo && { cd ../.. || exit 1; }

admin:
	sed --in-place "s|^hugo_base_dir.*|hugo_base_dir: $$PWD/generators/hugo|" cockpit/addons/Hugo/config.yaml
	sed --in-place "s|^hugo_theme.*|hugo_theme: tdro|" cockpit/addons/Hugo/config.yaml

migration:
	sqlite3 database/sqlite.db < database/contactform.sql
	sed --in-place "s|'sql:;dbname=sql_database'|'sqlite:' . __DIR__ . '/database/sqlite.db'|" config.php

permissions:
	find . -type f -print0 | xargs -0 chmod 640
	find . -type d -print0 | xargs -0 chmod 770
	chmod +x \
		bootstrap/helpers/cache \
		bootstrap/helpers/thumbnails \
		generators/openring/openring
	chmod g+w database/sqlite.db
	find public/images -type f -exec touch -d "3 days ago" {} +

.PHONY: generators admin
