#!/bin/sh

mysql -uroot < createTudasklaszterDB.sql

mysql -uroot tudasklaszter < createUserTable.sql
mysql -uroot tudasklaszter < createMenuTable.sql
mysql -uroot tudasklaszter < createRolesTable.sql
mysql -uroot tudasklaszter < createNewsTable.sql
mysql -uroot tudasklaszter < createImgTable.sql
