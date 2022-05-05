.. include:: ../../Includes.rst.txt

===============================
Configuration und Customisation
===============================

Overriding templates
====================

**EXT:a11y_me_video** is using Fluid as template engine.

This documentation won't bring you all information about Fluid but only the
most important things you need for using it. You can get more information in the section
`Fluid templates of the Sitepackage tutorial <https://docs.typo3.org/m/typo3/tutorial-sitepackage/main/en-us/FluidTemplates/>`__.
A complete reference of Fluid ViewHelpers provided by TYPO3 can be found in the
`Fluid ViewHelper Reference <https://docs.typo3.org/other/typo3/view-helper-reference/main/en-us/>`__

Change the templates using TypoScript constants
-----------------------------------------------

As any Extbase based extension, you can find the templates in the directory :file:`EXT:a11y_me_video/Resources/Private/`.

If you want to change a template, copy the desired files to the directory where you store the templates.

We suggest that you use a sitepackage extension. Learn how to create a
`sitepackage extension <https://docs.typo3.org/m/typo3/tutorial-sitepackage/main/en-us/>`__.

.. code-block:: typoscript

   plugin.tx_a11ymevideo {
      view {
         templateRootPath = EXT:mysitepackage/Resources/Private/Extensions/a11y_me_video/Templates/
         partialRootPath = EXT:mysitepackage/Resources/Private/Extensions/a11y_me_video/Partials/
         layoutRootPath = EXT:mysitepackage/Resources/Private/Extensions/a11y_me_video/Layouts/
      }
   }

CSS and Javascript Assets
=========================

CSS and Javascript files are integrated via the fluid partial :file:`EXT:a11y_me_video/Resources/Private/Partials/Assets.html`.

e.G.

.. code-block:: xml

   <f:asset.css identifier="a11yMeVideo_PlayerCss" href="EXT:a11y_me_video/Resources/Public/StyleSheets/videoPlayer.min.css"></f:asset.css>

If necessary, you can integrate your own modified files from your site package extension here.

e.G.

.. code-block:: xml

   <f:asset.css identifier="a11yMeVideo_PlayerCss" href="EXT:my_extension/Resources/Public/StyleSheets/videoPlayer.min.css"></f:asset.css>

Change CSS
----------

You can adapt the CSS to your own needs. As a basis, you can use the existing
Use CSS files or the scss source files. Save the file best in your own site
package extension and integrate it alternatively.

The source files can be found in the following folder:

*   :file:`EXT:a11y_me_video/Resources/Public/StyleSheets/`
*   :file:`EXT:a11y_me_video/Resources/Private/Scss/`

Example: Change background color of video and controls (css or scss)
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

.. code-block:: css
   :caption: override css

   /* background color video */
   .a11y-me-videoplayer video {
      background-color: #2b3840;
   }

   /* background color controls */
   .a11y-me-videoplayer.active-controls .mejs__controls:not([style*="display: none"])  {
      background-color: #2b3840;
   }

.. code-block:: css
   :caption: scss variables, EXT:a11y_me_video/Resources/Private/Scss/_variables.scss

   $a11y-video-outline-color : white;
   $a11y-video-controls-bg   : #2b3840;

.. note::
    The color contrast (foreground to background) for controls must be at least 4.5:1.

    *  `Contrast Checker <https://webaim.org/resources/contrastchecker/>`__
    *  `WCAG Criterion 1.4.3: Contrast (Minimum) <https://www.w3.org/WAI/WCAG21/Understanding/contrast-minimum.html>`__
    *  `WCAG Criterion 1.4.11: Non-text Contrast <https://www.w3.org/WAI/WCAG21/Understanding/non-text-contrast>`__

Javascript Sources
------------------

+------------------------------------------------------------------------------------------------------------+------------------------------------------------+
| JavaScript source file(s)                                                                                  | Description                                    |
+============================================================================================================+================================================+
| :file:`EXT:a11y_me_video/Resources/Public/JavaScript/Vendor/mediaelement/build/mediaelement-and-player.js` | MediaElements.js player                        |
+------------------------------------------------------------------------------------------------------------+------------------------------------------------+
| :file:`EXT:a11y_me_video/Resources/Public/JavaScript/Vendor/mediaelement/build/lang.advanced/*.js`         | extended language files for player             |
+------------------------------------------------------------------------------------------------------------+------------------------------------------------+
| :file:`EXT:a11y_me_video/Resources/Public/JavaScript/Vendor/mediaelement-plugins/dist/a11y/a11y.js`        | a11y plugin for subtitle und audio description |
+------------------------------------------------------------------------------------------------------------+------------------------------------------------+
| :file:`EXT:a11y_me_video/Resources/Public/videoPlayer.js`                                                  | starts init mediaelement players & some fixes  |
+------------------------------------------------------------------------------------------------------------+------------------------------------------------+

Override TypoScript settings
=============================

Change default header type
--------------------------

This setting determines which heading type is used when selecting *default* in
the backend content module.

The default header type is 2 (= h2 header).

.. code-block:: typoscript

   tt_content.a11ymevideo_videoplayer {
       variables {
           defaultHeaderType.value = 2
       }
   }

   tt_content.a11ymevideo_videoplayer2 {
       variables {
           defaultHeaderType.value = 2
       }
   }


.. figure:: ../../Images/HeaderType.png
   :width: 820
   :alt: screen shot of header type
