# Exceptions

## Try-with-resources
* simple way of closing resources
* syntax `try (resource1, recource 2) {}`
```java
        try (
            FileReader fileReader = new FileReader("example.txt");
            BufferedReader bufferedReader = new BufferedReader(fileReader)
        ) {
            // Code that uses the resources goes here
            String line = bufferedReader.readLine();
            System.out.println("Read from file: " + line);
        } catch (IOException e) {
            // Handle exceptions that might occur during resource management or resource usage
            e.printStackTrace();
        }
        // Resources are automatically closed when the try block is exited, even if an exception occurs
```
* Prior to Java 7, you would need to use a finally block to ensure that resources are closed,

## Custom Exceptions

* you can create custom exceptions by
  * implementing the Excption class
  * and using thorwable interface

```java
class MyCustomException extends Exception {
    public MyCustomException(String message) {
        super(message);
    }
}

public class CustomExceptionExample {
    public static void main(String[] args) {
        try {
            throw new MyCustomException("This is a custom exception!");

        } catch (MyCustomException e) {
            System.err.println("Custom Exception caught: " + e.getMessage());
        }
    }
}
```
* we create more meaningful and descriptive error hierarchy and handle different exceptional situations in our application.

## Common exceptions
* `ArrayIndexOutOfBoundsException` : when trying to get an index outside array range
* `ClassCastException`: when casting object to different types
* `NullPointerException`: when access a method that is null `String text=null; int len = text.length()`
* `ArithmeticException`: division by zero

## Stack Trace
* The stack trace is a list of the method calls that were active when the exception was thrown.
```java
java.lang.ArithmeticException: / by zero
	at StackTraceExample.generateException(StackTraceExample.java:13)
	at StackTraceExample.main(StackTraceExample.java:7)
```
* The subsequent lines show the sequence of method calls leading up to the exception:
  * at StackTraceExample.generateException(StackTraceExample.java:13) indicates that the exception occurred in the generateException method at line 13 of the StackTraceExample class.
  * at StackTraceExample.main(StackTraceExample.java:7) indicates that the generateException method was called from the main method at line 7 of the StackTraceExample class.

## Multiple Catch Exceptions
* you can catch multiple exceptions by using `|` operator
```java
try {
    // Code that might throw an exception
} catch (IOException | SQLException e) {
    // Handle exceptions that might occur during resource management or resource usage
    e.printStackTrace();
}
```
* before java 7 you would have to have separate catch for each exceptions.

## Finally Block

