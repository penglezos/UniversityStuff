#include <iostream>
using namespace std;

struct student {
	int studentId;
	float vathmos;
};

int main() {
	student john;
	john.studentId = 1234;
	john.vathmos = 8.5;
	
	student mary = {1235,6};
	cout<<"O john exei kodiko:"<<john.studentId<<"k vathmo:"<<john.vathmos<<endl;
	cout<<"H mary exei kodiko:"<<mary.studentId<<"k vathmo:"<<mary.vathmos<<endl;

}
