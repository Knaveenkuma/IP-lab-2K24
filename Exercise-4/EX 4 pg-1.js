const employees = [
    { name: "patrick", salary: 50000 },
    { name: "parker", salary: 60000 },
    { name: "peter", salary: 45000 },
    { name: "paul", salary: 70000 }
  ];
  function compareSalaryDescending(a, b) {
    return b.salary - a.salary;
  }
  employees.sort(compareSalaryDescending);
  console.log("Employees sorted by salary (descending order):");
  employees.forEach(employee => {
  console.log(`${employee.name}: $${employee.salary}`);
  });
  