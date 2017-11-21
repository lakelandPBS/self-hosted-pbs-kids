The goal is to keep it simple while allowing *some* customizability to the PBS Kids experience.

We are wrapping the PBS Kids module and then adding some content customized for the station. This will allow us to keep everything on our domain with a little bit of added branding.

## Why would anyone want to use this!?
Our station wanted to start using the PBS Kids module and promote it. Our station also covers local news. As you can imagine, a lot of the news today isn't suitable for children. If we were going to have children visiting our site to watch PBS Kids, parent's probably wouldn't like their kids exposed to some of the news stories. For this reason, a subdomain was setup using the PBS Kids module. However, just a page with the PBS Kids module is pretty bare bones. Shares to social media wouldn't pull up a title, thumbnail/preview, or description of the page. Also, search engines wouldn't have any info to use for indexing... so if your page did end up in search results it would be pretty void of any info for people to know what the page is. The implementation found here solves these problems.

# Installation
Once your stations domain has been white listed by PBS digital support, just clone this repo (or download & extract the archive) in to the directory you want the module to appear (e.g. `~/public_html/someDirectory/`).

Finally, copy `config-example.php` to `config.php`. Then make the needed changes in `config.php` to brand this for your station.

# Other

## Image Sizes

* **Logo** (currently not in use) - 200x200 preferred. It can be whatever size you'd like as long as it is a 1:1 aspect ratio. Just keep in mind that once it is in use, it will be scaled down.
* **Social Image** - Min: 600x315; Max 1200x630. We're using [Facebook's sizes](https://developers.facebook.com/docs/sharing/best-practices#images) but Twitter uses nearly the same dimensions/aspect ratio.

## Notes
All of this was put together pretty quickly with the intent of doing more but it has been a while since I've had the opportunity to build on it. Feel free to submit pull requests if you have anything you'd like to add (or fix).
