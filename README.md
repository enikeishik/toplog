# Toplog

[![Software License][ico-license]](LICENSE.txt)

Simple script to logging top processes that load CPU.

## Usage

1. Just download toplog.php and put it to home (or any another) folder.
2. Create folder for log files (default /var/log/toplog).
3. Create cron job:


```bash
*/5 * * * * php -f /path_to_script/toplog.php >> /var/log/toplog/toplog.log 2>&1
```

[ico-license]: https://img.shields.io/badge/license-GPL-brightgreen.svg?style=flat-square
