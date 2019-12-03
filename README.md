# Personal Portfolio for Thedro Neely
Core source code for https://www.thedroneely.com

<a href="https://www.thedroneely.com/images/trying-out-this-website.png">
  <img src="https://www.thedroneely.com/images/trying-out-this-website.png" alt="Deployed Website" width="514" height="300">
</a>

## Using The Deployed Linux Container


Create a container for the website called "app".
```sh
lxc-create -n app -t download -- --dist alpine --release 3.10 --arch amd64
```

Change to the container directory.
```sh
cd /var/lib/lxc/app
```

Remove the old base container file system.
```sh
rm -rf rootfs/*
```

Download the website at [https://www.thedroneely.com/download/rootfs.tar.gz](https://www.thedroneely.com/download/rootfs.tar.gz) and
verify its checksum using [https://www.thedroneely.com/download/rootfs.tar.gz.sha256](https://www.thedroneely.com/download/rootfs.tar.gz.sha256).
```sh
wget https://www.thedroneely.com/download/rootfs.tar.gz
```

Extract the contents to the container file system.
```sh
tar --numeric-owner -xzvf rootfs.tar.gz -C rootfs/
```

Start the website.
```sh
lxc-start -n app
```

Get the IP address.
```sh
lxc-ls -f
```
```sh
NAME     STATE   AUTOSTART GROUPS IPV4       IPV6 UNPRIVILEGED       
app      RUNNING 0         -      x.x.x.x    -    false        
```

## Notable Endpoints

[Cockpit CMS](https://getcockpit.com/) can be accessed at http://x.x.x.x/cockpit.
```sh
Username: admin
Password: admin
```
[Isso](https://posativ.org/isso/) commenting administration page can be accessed at http://x.x.x.x/isso/admin.
```sh
Password: changethis
```
