function addNewPrefix(str) {

    if (str.startsWith("New!")) {

      return str;
    } else {

      return "New!" + str;
    }
  }
   console.log(addNewPrefix("Man")); 
  console.log(addNewPrefix("New!String")); 
  