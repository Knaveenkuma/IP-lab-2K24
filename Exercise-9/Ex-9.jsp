<%-- 
    Document   : Ex-9
    Created on : 12-Apr-2024, 3:28:45 pm
    Author     : navee
--%>

<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<%@ taglib prefix="fmt" uri="http://java.sun.com/jsp/jstl/fmt" %>
<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<%@ page import="java.util.List" %>
<%@ page import="java.util.ArrayList" %>
<%@ page import="java.util.Collections" %>
<%@ page import="java.text.SimpleDateFormat" %>
<%@ page import="java.text.DecimalFormat" %>

<%
    class Employee {
        private String name;
        private String department;
        private double salary;
        private String hireDate;

        public Employee(String name, String department, double salary, String hireDate) {
            this.name = name;
            this.department = department;
            this.salary = salary;
            this.hireDate = hireDate;
        }

        // Getters
        public String getName() {
            return name;
        }

        public String getDepartment() {
            return department;
        }

        public double getSalary() {
            return salary;
        }

        public String getHireDate() {
            return hireDate;
        }
    }


    List<Employee> employees = new ArrayList<>();
    employees.add(new Employee("Siva JB", "Engineering", 95000, "2022-01-15"));
    employees.add(new Employee("Naveen kumar", "Marketing", 105000, "2021-03-20"));
    employees.add(new Employee("Harish B", "Finance", 85000, "2023-05-10"));
    employees.add(new Employee("Visweash BR", "Finance", 95000, "2023-04-08"));

    Collections.sort(employees, (e1, e2) -> e1.getName().compareToIgnoreCase(e2.getName()));
%>
<html>
<head>
    <title>Employee Table</title>
    <style>
        .highlight {
            background-color: yellow;
        }
    </style>
</head>
<body>
    <h1>Employee Table</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Department</th>
                <th>Salary</th>
                <th>Hire Date</th>
            </tr>
        </thead>
        <tbody>
            <c:forEach items="${employees}" var="employee">
                <c:set var="highlight" value="${employee.salary > 100000}" />
                <tr class="<c:if test="${highlight}">highlight</c:if>">
                    <td>${employee.name}</td>
                    <td>${employee.department}</td>
                    <td><fmt:formatNumber value="${employee.salary}" type="currency" /></td>
                    <td><fmt:formatDate value="${employee.hireDate}" pattern="MM/dd/yyyy" /></td>
                </tr>
            </c:forEach>
        </tbody>
    </table>
</body>
</html>

