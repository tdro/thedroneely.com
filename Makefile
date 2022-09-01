generators:
	make openring
	make fortune

openring:
	generators/openring/openring \
	-s "https://drewdevault.com/feed.xml" \
	-s "https://mxb.dev/feed.xml" \
	-s "https://www.taniarascia.com/rss.xml" \
	< generators/openring/template.html \
	> generators/hugo/themes/tdro/layouts/partials/generators/openring/openring.html

fortune:
	strfile generators/fortune/quotes.fortune

hugo:
	ln -sfT ../../public generators/hugo/public
	cd generators/hugo && hugo && { cd ../.. || exit 1; }

cockpit:
	sed --in-place "s|^hugo_base_dir.*|hugo_base_dir: $$PWD/generators/hugo|" cockpit/addons/Hugo/config.yaml
	sed --in-place "s|^hugo_theme.*|hugo_theme: tdro|" cockpit/addons/Hugo/config.yaml

.PHONY: generators cockpit
