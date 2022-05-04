# HistoricEvents-Germany

[![release](https://img.shields.io/github/v/release/reteP-riS/HistoricEvents-Germany)](https://github.com/reteP-riS/HistoricEvents-Germany/releases "release")
[![downloads](https://img.shields.io/github/downloads/reteP-riS/HistoricEvents-Germany/total.svg)](https://github.com/reteP-riS/HistoricEvents-Germany/releases "downloads")
[![open issues](https://img.shields.io/github/issues-raw/reteP-riS/HistoricEvents-Germany)](https://github.com/reteP-riS/HistoricEvents-Germany/issues?state=open "issues")
[![open pull requests](https://img.shields.io/github/issues-pr-raw/reteP-riS/HistoricEvents-Germany)](https://github.com/reteP-riS/HistoricEvents-Germany/pulls "pull requests")
[![license](https://img.shields.io/github/license/reteP-riS/HistoricEvents-Germany)](https://github.com/reteP-riS/HistoricEvents-Germany/blob/main/LICENSE.md "license")
[![webtrees](https://img.shields.io/static/v1?label=webtrees&message=v2.x&color=blue)](https://github.com/fisharebest/webtrees "webtrees")

This module provides selected events of the German history to [webtrees](https://github.com/fisharebest/webtrees) version 2.x only.

## Table of Contents

* [Copyright and License](#copyright-and-license)
* [System Requirements and Testing](#system-requirements-and-testing)
* [Installation](#installation)
* [Upgrade](#upgrade)
* [Implementation and Languages](#implementation-and-languages)
* [Usage](#usage)
* [Issues and Feature Requests](#issues-and-feature-requests)

## Copyright and License

© Copyright 2021 [webtrees](https://github.com/fisharebest/webtrees "webtrees") Development Team & [Sir Peter](https://github.com/reteP-riS/HistoricEvents-Germany "Sir Peter")

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program. If not, see <http://www.gnu.org/licenses/>.

## System Requirements and Testing

Same as the [webtrees#system-requirements](https://github.com/fisharebest/webtrees#system-requirements).

Tested with webtrees v2.0.17 up to v2.0.23 on PHP v7.4.25.

## Installation

1. Download and unzip the release specific [`HistoricEvents-Germany-x.y.z.zip`](https://github.com/reteP-riS/HistoricEvents-Germany/releases "release") file into the `webtrees/modules_v4` folder of your web server.
2. Rename the folder `HistoricEvents-Germany-x.y.z` to `HistoricEvents-Germany`.
3. As an administrator, **enable** this module in Control Panel -> Modules -> Individual page -> Historic events.

## Upgrade

1. Download and unzip the release specific [`HistoricEvents-Germany-x.y.z.zip`](https://github.com/reteP-riS/HistoricEvents-Germany/releases "release") file into the `webtrees/modules_v4` folder of your web server.
2. As an administrator, **disable** this module in Control Panel -> Modules -> Individual page -> Historic events.
3. Rename the old folder `HistoricEvents-Germany` to `HistoricEvents-Germany.BACKUP`.
4. Rename the new folder `HistoricEvents-Germany-x.y.z` to `HistoricEvents-Germany`.
5. As an administrator, **enable** this module in Control Panel -> Modules -> Individual page -> Historic events.
6. If the new version is working as expected you should delete the folder `HistoricEvents-Germany.BACKUP`.

## Implementation and Languages

Support for historic EVEN tags is currently limited to the TYPE, DATE, PLAC, NOTE and SOUR subtags. Language support is even further limited to the TYPE subtag. Below you'll find an example in **German** and how it was implemented in `module.php`:

#### Resulting GEDCOM lines 
    1 EVEN Beginn des Zweiten Weltkriegs
    2 TYPE Historisches Ereignis
    2 DATE 01 SEP 1939
    2 PLAC Westerplatte, Neufahrwasser, Danzig, Stadtkreis Danzig, Freie Stadt Danzig
    2 NOTE Beginn des Zweiten Weltkriegs durch den deutschen Überfall auf Polen.
    2 SOUR https://de.wikipedia.org/wiki/Überfall_auf_Polen

#### Implementation

    public function historicEventsAll(): Collection
    {
      $eventType = I18N::translate('Historic event');
      return new Collection([
      ...
      "1 EVEN Beginn des Zweiten Weltkriegs\n2 TYPE ".$eventType."\n2 DATE 01 SEP 1939\n2 PLAC Westerplatte, Neufahrwasser, Danzig, Stadtkreis Danzig, Freie Stadt Danzig\n2 NOTE Beginn des Zweiten Weltkriegs durch den deutschen Überfall auf Polen.\n2 SOUR https://de.wikipedia.org/wiki/Überfall_auf_Polen",
      ...
      ]);
    }

Language files are included to translate the event TYPE value from English "Historic event" to the German "Historisches Ereignis" and other languages for all events automatically while the EVEN, PLAC, NOTE and SOUR values are currently available in German only. Links like in the above example will only be clickable if markdown has NOT been enabled in the tree preferences. 

## Usage

1. As a user, enable or disable the "Historic events" on the "Facts and events" tab as needed.

## Issues and Feature Requests

If you experience a software issue or have a request for additional historic events for this module you can [**create a new issue**](https://github.com/reteP-riS/HistoricEvents-Germany/issues?state=open "create new issue") on GitHub.
