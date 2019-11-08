#include <iostream>
#define exch 1.12
using namespace std;

float todollars(float eur){
	return eur * exch;
}

int main() {
	float euros, dollars;
	cout <<"Dose poso se euro:"<<endl;
	cin >> euros;
	dollars = todollars(euros);
	cout<<"Metatropi: "<<dollars; 
	return 0;
}
