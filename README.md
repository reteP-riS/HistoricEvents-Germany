# HistoricEvents-Germany
[![release](https://img.shields.io/static/v1?label=release&message=v1.0.3&color=green)](https://github.com/reteP-riS/webtrees-HistoricEvents-Germany/releases "release")
[![license](https://img.shields.io/static/v1?label=license&message=GPL-3.0&color=orange)](https://github.com/reteP-riS/webtrees-HistoricEvents-Germany/blob/main/LICENSE.md "license")
[![webtrees](https://img.shields.io/static/v1?label=webtrees&message=v2.x&color=blue)](https://github.com/fisharebest/webtrees "webtrees")

This module provides selected events of the German history to [webtrees](https://github.com/fisharebest/webtrees) version 2.x only.

## Table of Contents

* [System Requirements and Testing](#system-requirements-and-testing)
* [Installation](#installation)
* [Upgrade](#upgrade)
* [Usage](#usage)

## System Requirements and Testing
Same as [webtrees#system-requirements](https://github.com/fisharebest/webtrees#system-requirements).

Tested with webtrees v2.0.11 on PHP v7.4.13.

## Installation
1. Download and unzip the release specific [`webtrees-HistoricEvents-Germany-x.y.z.zip`](https://github.com/reteP-riS/webtrees-HistoricEvents-Germany/releases "release") file into the `webtrees/modules_v4` folder of your web server.
2. Rename the folder `webtrees-HistoricEvents-Germany-x.y.z` to `HistoricEvents-Germany`.
3. As an administrator, **enable** this module in Control Panel -> Modules -> Individual page -> Historic events.

## Upgrade
1. Download and unzip the release specific [`webtrees-HistoricEvents-Germany-x.y.z.zip`](https://github.com/reteP-riS/webtrees-HistoricEvents-Germany/releases "release") file into the `webtrees/modules_v4` folder of your web server.
2. As an administrator, **disable** this module in Control Panel -> Modules -> Individual page -> Historic events.
3. Rename the old folder `HistoricEvents-Germany` to `HistoricEvents-Germany.BACKUP`.
4. Rename the new folder `webtrees-HistoricEvents-Germany-x.y.z` to `HistoricEvents-Germany`.
5. As an administrator, **enable** this module in Control Panel -> Modules -> Individual page -> Historic events.
6. If the new version is working as expected you should delete the folder `HistoricEvents-Germany.BACKUP`.

## Usage
1. As a user, enable or disable the "Historic events" on the "Facts and events" tab as needed.
