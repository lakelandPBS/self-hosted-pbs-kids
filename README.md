The goal is to keep it simple while allowing *some* customizability to the PBS Kids experience.

We are wrapping the PBS Kids module and then adding some content customized for the station. This will allow us to keep everything on our domain with a little bit of added branding.

# Installation
Once your stations domain has been white listed by PBS digital support, just clone this repo (or download & extract the archive) in to the directory you want the module to appear (e.g. `~/public_html/someDirectory/`).

Finally, take a look at `include/config.php` and make the needed changes to brand this for your station.

# Other

## Image Sizes

* **Logo** (currently not in use) - 200x200 preferred. It can be whatever size you'd like as long as it is a 1:1 aspect ratio. Just keep in mind that once it is in use, it will be scaled down.
* **Social Image** - Min: 600x315; Max 1200x630. We're using [Facebook's sizes](https://developers.facebook.com/docs/sharing/best-practices#images) but Twitter uses nearly the same dimensions/aspect ratio.
