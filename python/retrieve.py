from pymongo import MongoClient
client=MongoClient('localhost',27017)
db=client.TYITDB259743
def read():
    try:
        Col=db.MyCol.find()
        print("\nAll data from database TYITDB259743:")
        for MyCol in Col:
            print(MyCol)
    except Exception:
        print(str(e))

read()
