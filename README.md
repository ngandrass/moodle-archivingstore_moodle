# Moodle Archiving Storage Driver: Moodle Filestore

[![Latest Version](https://img.shields.io/github/v/release/ngandrass/moodle-archivingstore_moodle?include_prereleases)](https://github.com/ngandrass/moodle-archivingstore_moodle/releases)
[![PHP Support](https://img.shields.io/badge/PHP-8.1%20--%208.4-blue)](https://github.com/ngandrass/moodle-archivingstore_moodle)
[![Moodle Support](https://img.shields.io/badge/Moodle-4.5%20--%205.0-orange)](https://github.com/ngandrass/moodle-archivingstore_moodle)
[![GitHub Workflow Status: Moodle Plugin CI](https://img.shields.io/github/actions/workflow/status/ngandrass/moodle-archivingstore_moodle/moodle-plugin-ci.yml?label=Moodle%20Plugin%20CI)](https://github.com/ngandrass/moodle-archivingstore_moodle/actions/workflows/moodle-plugin-ci.yml)
[![Code Coverage](https://img.shields.io/coverallsCoverage/github/ngandrass/moodle-archivingstore_moodle)](https://coveralls.io/github/ngandrass/moodle-archivingstore_moodle)
[![GitHub Issues](https://img.shields.io/github/issues/ngandrass/moodle-archivingstore_moodle)](https://github.com/ngandrass/moodle-archivingstore_moodle/issues)
[![GitHub Pull Requests](https://img.shields.io/github/issues-pr/ngandrass/moodle-archivingstore_moodle)](https://github.com/ngandrass/moodle-archivingstore_moodle/pulls)
[![Maintenance Status](https://img.shields.io/maintenance/yes/9999)](https://github.com/ngandrass/moodle-archivingstore_moodle/)
[![License](https://img.shields.io/github/license/ngandrass/moodle-archivingstore_moodle)](https://github.com/ngandrass/moodle-archivingstore_moodle/blob/master/LICENSE)
[![Donate with PayPal](https://img.shields.io/badge/PayPal-donate-d85fa0)](https://www.paypal.me/ngandrass)
[![Sponsor with GitHub](https://img.shields.io/badge/GitHub-sponsor-d85fa0)](https://github.com/sponsors/ngandrass)
[![GitHub Stars](https://img.shields.io/github/stars/ngandrass/moodle-archivingstore_moodle?style=social)](https://github.com/ngandrass/moodle-archivingstore_moodle/stargazers)
[![GitHub Forks](https://img.shields.io/github/forks/ngandrass/moodle-archivingstore_moodle?style=social)](https://github.com/ngandrass/moodle-archivingstore_moodle/network/members)
[![GitHub Contributors](https://img.shields.io/github/contributors/ngandrass/moodle-archivingstore_moodle?style=social)](https://github.com/ngandrass/moodle-archivingstore_moodle/graphs/contributors)

Archiving storage driver for storing archived data inside the Moodle file store.

This plugin is part of the [Moodle archiving framework](https://github.com/ngandrass/moodle-local_archiving/).
You can find more information about the archiving subsystem in the [official documentation](https://archiving.gandrass.de/).


# WARNING: DO NOT USE THIS PLUGIN YET!

This plugin is currently under active development. Please do **not use this plugin in production environments** yet!

Once a stable version is released, this warning will be removed.


# Installation

Storage drivers (`archivingstore`) are sub-plugins of the archiving subsystem core (`local_archiving`) and therefore
require the core plugin to be installed. They then must be placed inside your Moodle directory under
`local/archiving/driver/store`.

You can find detailed installation instructions within the [official documentation](https://archiving.gandrass.de/).
If you have problems installing this plugin or have further questions, please feel free to open an issue within the
[GitHub issue tracker](https://github.com/ngandrass/moodle-local_archiving/issues).


## License

2025 Niels Gandraß <niels@gandrass.de>

This program is free software: you can redistribute it and/or modify it under
the terms of the GNU General Public License as published by the Free Software
Foundation, either version 3 of the License, or (at your option) any later
version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
PARTICULAR PURPOSE.  See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with
this program.  If not, see <https://www.gnu.org/licenses/>.
