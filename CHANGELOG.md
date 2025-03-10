CHANGELOG
=========

## 1.10.0 build 2025-02-21 21:59:51

* cloned repository to Platon Technologies
* added QRcode::pngBase64() for create string of PNG in Base64 encoding for inline use
* added example (11) for use QRcode::pngBase64()
* build with ZIP released

## 1.9.9 build 20130526

- __internal__ build (no ZIP released)
- over 20 full examples, with example browser
- in-code documentation, doxygen config and HTML Api docs
- refactored __qrstr__ -> QRspec::set, FrameFiller -> QRframeFiller
- fixed default parameters in QRCode:: static methods
- fixed bugs (like string instead of $string, wrong parameters) found by community
- improved debug output from QRarea and QRspec::debug

## 1.1.4 build 2010100721

- added missing static keyword QRinput::check (found by Luke Brookhart, Onjax LLC)

## 1.1.3 build 2010081807

- short opening tags replaced with standard ones

## 1.1.2 build 2010032722

- full integration with TCPDF thanks to Nicola Asuni, it's author
- fixed bug with alphanumeric encoding detection

## 1.1.1 build 2010032405

- patch by Rick Seymour allowing saving PNG and displaying it at the same time
- added version info in VERSION file
- modified merge tool to include version info into generated file
- fixed e-mail in almost all head comments

## 1.1.0 build 2010032113

- added merge tool wich generate merged version of code
  located in phpqrcode.php
- splited qrconst.php from qrlib.php

## 1.0.0 build 2010031920

- first public release
- help in readme, install
- cleanup ans separation of QRtools and QRspec
- now TCPDF binding requires minimal changes in TCPDF, having most of job
  done in QRtools tcpdfBarcodeArray
- nicer QRtools::timeBenchmark output
- license and copyright notices in files
- indent cleanup - from tab to 4spc, keep it that way please :)
- sf project, repository, wiki
- simple code generator in index.php
