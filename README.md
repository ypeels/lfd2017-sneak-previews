How I deployed a static web page on Heroku
===
(Because Tripod didn't allow basic HTML editing [let alone JavaScript uploading], and I didn't feel like figuring out IIS.)

Probably not the best or cleanest way to do it, but it worked.

1. Create Github repo with webpage as `index.php`
1. New Heroku app, deployment through GitHub. (This gives Heroku full read/write privileges on your GitHub account.)
1. To test, just load `lfd2017.herokuapp.com` (don't need to specify `/index.php`)

References

- https://stackoverflow.com/questions/13010317/heroku-creating-a-simple-static-one-page-website-on-cedar
- https://stackoverflow.com/questions/21066203/how-to-host-a-static-web-page-on-heroku
- https://www.kennethreitz.org/essays/static-sites-on-heroku-cedar
