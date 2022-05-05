.. include:: ../../Includes.rst.txt

============
Installation
============

The extension needs to be installed as any other extension of TYPO3 CMS. Get the
extension by one of the following methods.

Installation using composer
===========================

The recommended way to install the extension is by using
`Composer <https://getcomposer.org/>`__.
In your composer based TYPO3 project root, just do

.. code-block:: bash

   composer require iundd/a11y_me_video

Latest version from git
=======================

You can get the latest version from git by using the git command:

.. code-block:: bash

   git clone https://github.com/iundd/a11y_me_video.git

Installation from TYPO3 Extension Repository (TER)
==================================================

*  **Get it from the Extension Manager:** Switch to the module `Admin Tools > Extensions`.
*  Switch to `Get Extensions` and search for the extension key **a11y_me_video**
*  install the extension from the repository.

Download from extensions.typo3.org
==================================

*  Go to `<https://extensions.typo3.org/extension/a11y_me_video>`__
   and get the current version from by downloading the zip version

Preparation: Include static TypoScript
======================================

The extension ships some TypoScript code which needs to be included.

#. Switch to the root page of your site.

#. Switch to the **Template module** and select *Info/Modify*.

#. Press the link **Edit the whole template record** and switch to the tab *Includes*.

#. Select **a11y_video_player** at the field *Include static (from extensions):*

   For some css classes to work, you also need to select
   **Fluid Content Elements CSS (optional)**

Versioning
----------

This project uses `semantic versioning <https://semver.org/>`__, which means that

*  **bugfix updates** (e.g. 1.0.0 => 1.0.1) just include small bugfixes or
   security relevant stuff without breaking changes,
*  **minor updates** (e.g. 1.0.0 => 1.1.0) include new features and smaller
   tasks without breaking changes and
*  **major updates** (e.g. 1.0.0 => 2.0.0) contain breaking changes which can be
   refactorings, features or bugfixes.

