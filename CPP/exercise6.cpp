#include <iostream>
using namespace std;

struct date {
	int day;
	int month;
	int year;
};
	
struct employee {
	int employeeNumber;
	date hireDate;
	float salary;
	char job[30];	
};

void printDate(date d) {
	cout<<d.day<<"/"<<d.month
	<<"/"<<d.year;
}

void printEmployee(employee e) {
	cout <<"Employee with number"<<
	e.employeeNumber<<"is a "<<e.job
	<<", hired at";
	printDate(e.hireDate);
	cout<<" paid with"<<e.salary<<" euros per month"<<endl;
}

int main() {
	employee emp;
	cout<<"Give employee number"<<endl;
	cin>>emp.employeeNumber;
	cout<<"Give employee hire date"<<endl;
	cin>>emp.hireDate.day>>emp.hireDate.month>>emp.hireDate.year;
	cout<<"Give employee salary"<<endl;
	cin>>emp.salary;
	cout<<"Give employee job description"<<endl;
	cin>>emp.job;
	printEmployee(emp);
	
	return 0;
}
