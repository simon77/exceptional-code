#Code Examples To Demonstrate Using PHP Exceptions To Make Cleaner Code

I've seen lots of OO code that uses sound principles and patterns to create objects
but often the code receiving these objects is given the responsibility of determining if the object was created
properly or is **null** or **false**.

This is a set of example code showing how to use custom exceptions to make your whole code
base cleaner by removing potential null object errors or an abundance of code like this 
```php
if (null === $user) {
    // do user not found processing
}
```

