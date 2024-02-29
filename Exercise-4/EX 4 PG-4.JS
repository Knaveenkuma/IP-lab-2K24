function csvToArray(csvString) {
    const rows = csvString.split('\n');
    const result = [];
    rows.forEach(row => {
     const values = row.split(',');
       result.push(values);
    });
    
    return result;
  }
  const csvString = "1,Patrick,Parker\n2,Tyler,Thomas\n3,Bruce,Belfort";
  const resultArray = csvToArray(csvString);
  console.log(resultArray);
  