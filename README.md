Pico w/ Hippycache
==================

Pico is a stupidly simple, blazing fast, flat file CMS. See
http://pico.dev7studios.com for more info. It does, however, have a problem:
it scans the entire content directory hierarchy on every single page request.
This is OK, when there are only a small number of pages but it effectively kills
performance when there are hundreds of content pages.

To overcome this problem, I created Hippycache. It's a rather stupid way of
caching content: content is stored in a single variable embedded directly into
the index.php file. This does make Pico rather performant and it kind of
replicates Memcache functionality without actually requiring Memcache.
