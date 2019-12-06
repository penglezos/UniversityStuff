#include <iostream>
using namespace std;

class FooBar{
	private:
		int data;
	public:
		void setData(int d);
		int getData(); 
};

void FooBar::setData(int d) {
	data = d;
}

int FooBar::getData(){
	return data;
}

int main() {
	FooBar f;
	f.setData(10);
	cout<<f.getData()<<endl;
	return 0;
}
