import com.mongodb.client.MongoCollection;
import com.mongodb.client.MongoDatabase;
import com.mongodb.MongoClient;
import org.bson.Document;

public class insert {
    public static void main(String[] args) {
        MongoClient mongo = new MongoClient("localhost", 27017);
        System.out.println("Connected to the database successfully");
        MongoDatabase database = mongo.getDatabase("TYITDB259743");
        MongoCollection<Document> collection = database.getCollection("myCol");
        System.out.println("Collection myCol selected successfully");
        Document document = new Document();
        document.append("id", 1);
        document.append("Name", "Chanchal");
        document.append("RollNo", 259743);
        document.append("Age", 20);
        document.append("College", "MCC");
        collection.insertOne(document);
        System.out.println("Document Inserted successfully");
    }
}














Note:
We require a jar file to connect java with MongoDB for this we have to in 
create new variable called classpath whose value will be address of this 
jar file in the system variable of the environment variable.
path will be in software\mongo-java-driver-3.0.4.jar (till here)
1. open mongo shell
2. new cmd in admin mode
javac insert.java
java insert
3. for all document do the same and see changes in mongo shell
Shell :-
	show dbs : To check the database is created or not.
	If the database is created use the database by using use Database_Name .
	Now we need to check collection is created or not using show collections .
	To check the document type db.Collection_name.find().pretty() .
