/////////Askisi 3 pg 6//////////

#include <iostream>

using namespace std;

class Time
{
	private:
		int hours;
		int minutes;
		int seconds;
	public:
		Time();
		Time(int h, int m, int s);
		void print();
		void init();
		int toSeconds();
		void validate();
};

Time::Time()
{
	hours=0;
	minutes=0;
	seconds=0;
}
Time::Time(int h, int m, int s)
{
	hours=h;
	minutes=m;
	seconds=s;
}
void Time::print()
{
	cout<<hours<<":"<<minutes<<":"<<seconds<<endl;
}
void Time::init()
{
	cout<<"Dwse wres lepta kai defterolepta"<<endl;
	cin>>hours>>minutes>>seconds;
}
int Time::toSeconds()
{
	return 3600*hours+60*minutes+seconds;
}
void Time::validate()
{
	if(hours<0 || hours>24)
	{
		hours=0;
		cout<<"Wres ektos oriwn, tethikan sto 0"<<endl;
	}
	if(minutes<0 || minutes>60)
	{
		minutes=0;
		cout<<"Lepta ektos oriwn, tethikan sto 0"<<endl;
	}
	if(seconds<0 || seconds>60)
	{
		seconds=0;
		cout<<"Defterolepta ektos oriwn, tethikan sto 0"<<endl;
	}
	
}

int main()
{
	Time t1, t2;
	int sec;
	
	t1.init();
	t2.init();
	
	t1.print();
	t2.print();
	
	sec=t1.toSeconds();
	cout<<"O xronos: ";
	t1.print();
	cout<<"se defterolepta einai: "<<sec<<endl;
	t2.validate();
	t2.print();
	
	return 0;
}
