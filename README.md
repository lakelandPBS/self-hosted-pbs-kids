The goal is to keep it simple while allowing *some* customizability to the PBS Kids experience.

We are wrapping the PBS Kids module and then adding some content customized for the station. This will allow us to keep everything on our domain with a little bit of added branding.

# Installation
Once your stations domain has been white listed by PBS digital support, just clone this repo (or download & extract the archive) in to the directory you want the module to appear (e.g. `~/public_html/someDirectory/`).

Finally, take a look at `include/config.php` and make the needed changes to brand this for your station.

# Other

## Image Sizes

* **Logo** (currently not in use) - can be whatever size you'd like. Just keep in mind that once it is in use, it will be scaled down.
* **OG Image** - Min: 600x315; Max 1200x630. We're using [Facebook's sizes](https://developers.facebook.com/docs/sharing/best-practices#images).
