#include <iostream>
using namespace std;

class FooBar{
	private:
		int data;
	public:
		FooBar();
		FooBar(int d);
		void print();
};

FooBar::FooBar(){
	data = 0;
}

FooBar::FooBar(int d) {
	data = d;
}

void FooBar::print() {
	cout <<data<<endl;
}

int main() {
	FooBar f1;
	f1.print();
	FooBar f2(40);
	f2.print();
	return 0;
}
