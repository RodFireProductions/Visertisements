# Visertisements

An advertisement system for non-commercial visual novels.
This was inspired by [johnvertisement](https://john.citrons.xyz/) and [NavLink Ads](https://dimden.dev/navlinkads/).

## How To Add Your Advertisement

First, read the [guidelines](https://visertisements.shroom.ink/#guidelines)! Second, add your advertisement image to the `ads` folder. Please name the file like so: `thegametitle_thedevelopername.filetype`.

Thirdly, add your advertisement array to the `$ads` array in `ads.php`.
```php
["Game Title", "Developer Name", "URL", "Image file name", False]
```
Change the last item in the array to `True` if your visual novel contains adult content. Leave it as `False` otherwise.

And finally, submit that pull request!
