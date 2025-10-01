mongoD
mongosh 
>mongod --dbpath "C:\Program Files\MongoDB\Server\6.0\data" --logpath "C:\Program Files\MongoDB\Server\6.0\log\mongod.log" --port 27017 --storageEngine=wiredTiger --journal --replSet shreya259708
mongosh --port 27017
very optional if 3rd step gives error then only do this:
"C:\Program Files\MongoDB\Server\6.0\bin\mongod.exe" --dbpath "C:\Program Files\MongoDB\Server\6.0\data" --logpath "C:\Program Files\MongoDB\Server\6.0\log\mongod.log" --port 27017 --storageEngine wiredTiger --journal --replSet shreya259708
then wait util it shows output as waiting for connection on port 27017..
