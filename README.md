# CodeZero Utilities #

[![Build Status](https://travis-ci.org/codezero-be/utilities.svg?branch=master)](https://travis-ci.org/codezero-be/utilities)
[![Latest Stable Version](https://poser.pugx.org/codezero/utilities/v/stable.svg)](https://packagist.org/packages/codezero/utilities)
[![Total Downloads](https://poser.pugx.org/codezero/utilities/downloads.svg)](https://packagist.org/packages/codezero/utilities)
[![License](https://poser.pugx.org/codezero/utilities/license.svg)](https://packagist.org/packages/codezero/utilities)

This package includes some all-round methods that might be useful in many projects.

## Installation ##

Download this package or install it through Composer:

    "require": {
    	"codezero/utilities": "1.*"
    }

## URL Helper ##

#### Join slugs into a well formatted URL ####

	$urlParts = [
        'http://www.mysite.com/',
        '/subdir',
        'someOtherDir/',
        '/somepage.php'
    ];

    use CodeZero\Utilities\UrlHelper;

	$urlHelper = new UrlHelper();

    $url = $urlHelper->joinSlugs($urlParts);

> Returns: `http://www.mysite.com/subdir/someOtherDir/somepage.php`

This will make sure there is only one slash between each slug.

### That's all for now...
---
[![Analytics](https://ga-beacon.appspot.com/UA-58876018-1/codezero-be/utilities)](https://github.com/igrigorik/ga-beacon)