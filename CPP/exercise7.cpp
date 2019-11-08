#include <iostream>
using namespace std;

void dublicate(int *p) {
	*p*=2;
	//*p = *p*2;
}

int main() {
	int number = 10;
	dublicate(&number);
	cout<< number<<endl;
	return 0;
}
