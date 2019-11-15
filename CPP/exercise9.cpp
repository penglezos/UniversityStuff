#include <iostream>
using namespace std;

struct time {
	int seconds;
	int minutes;
	int hours;
};

void init(time *t) {
	cout<<"Dose ores lepta kai deuterolepta:"<< endl;
	cin>> t -> hours>> t -> minutes>> t -> seconds;
}

void print(time t) {
	cout<<t.hours<<":"<<t.minutes<<":"<<t.seconds<<endl;
}

int toSeconds(time t){
	return t.hours * 3600 + t.minutes * 60 + t.seconds;
}

void validate(time *t) {
	if(t -> hours < 0 && t -> hours > 24) {
		t -> hours = 0;
		cout<<"ektos orion oi ores eginan 0"<<endl;
	}
	if (t -> minutes < 0 || t -> minutes > 60) {
		t -> minutes = 0;
		cout<<"......"<<endl;
	}
	if (t -> seconds < 0 && t -> seconds>60) {
		t -> seconds = 0;
		cout <<"...."<< endl;
	}
}

int main() {
	time t1,t2;
	int s;
	
	init(&t1);
	init(&t2);
	
	print(t1);
	print(t2);
	s = toSeconds(t1);
	cout <<" o xronos";
	print(t1);
	cout<<"se deuterolepta einai: "<<s<<endl;
	
	validate(&t1);
	print(t1);
	return 0;
}

