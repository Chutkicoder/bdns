from pymongo import MongoClient
client=MongoClient('localhost',27017)
db=client.TYITDB259743
def insert():
    try:
        name1=input("Enter the Name: ")
        age1=input("Enter the Age: ")
        dept1=input("Enter the Department: ")
        pin1=input("Enter the Pin No: ")
        db.MyCol.insert_one({
            "name":name1,
            "age":age1,
            "dept":dept1,
            "pin":pin1
            })
        print("Inserted data successfully")
    except Exception:
        print(str(e))
insert()











"""Note:
To connect python with mongodb follow the following step
1.  Set the path of python in the environment variable:
search %LocalAppData% in window
Local app dat->programs->python->scripts
copy->set in environmental variable path
Then in cmd as administrator mode type pip install pymongo
it should come requirement already satisfy
2. Run the code
Then in mongo shell see the output"""
