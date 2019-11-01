#include <iostream>
using namespace std;

struct family {
	char name[20];
	int members;
};

int main() {
	int numOfFamilies;
	cout<<"Dose arithmo oikogenion:"<<endl;
	cin>> numOfFamilies;
	
	family families[numOfFamilies];
	family * pf;
	
	for(int i=0; i<numOfFamilies; i++) {
		cout<<"Dose onoma"<<i+1<<" tis oikogenias:"<<endl;
		cin>> families[i].name;
		cout<<"Dose ta meli"<<endl;
		cin>> families[i].members;
	}
	
	for(pf=families; pf<&families[numOfFamilies]; pf++) {
		cout << pf -> name <<"Exoun" <<
		pf -> members<<"Meli"<<endl;
	}
	return 0;
}
