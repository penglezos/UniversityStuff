////////Askisi 2.2 Selida 34///////


#include<iostream>
#include<cmath>

using namespace std;

struct point
{
	float x;
	float y;
};

float apostasi(point p)
{
	return sqrt(pow(p.x,2)+pow(p.y,2));
}

void sort(point *p, int size)
{
	float dj, dj1;
	point temp;
	
	for (int i=0; i<size; i++)
    {
 		for (int j=size-1; j>i; j--)
 		{
 			dj=apostasi(p[j]);
 			dj1=apostasi(p[j-1]);
 			
 			if(dj1>dj)
			{
 				temp=p[j];
 				p[j]=p[j-1];
 				p[j-1]=temp;
            }
 		}
    }
}

int main()
{
		point p1, p2, p3;
		int tableSize;
		
		cout<<"Give x: "<<endl;
		cin>>p1.x;
		cout<<"Give y: "<<endl;
		cin>>p1.y;
		cout<<"Give x: "<<endl;
		cin>>p2.x;
		cout<<"Give y: "<<endl;
		cin>>p2.y;
		
		p3.x=p1.x+p2.x;
		p3.y=p2.y+p2.y;
		
		cout<<"Point ("<<p3.x<<", "<<p3.y<<")"<<endl;
		
		cout<<"Give the number of points u want to create: "<<endl;
		cin>>tableSize;
		
		point table[tableSize];
		
		for(int i=0;i<tableSize;i++)
		{
			cout<<"Give x: "<<endl;
			cin>>table[i].x;
			cout<<"Give y: "<<endl;
			cin>>table[i].y;
		}
		sort(table, tableSize);
		
		return 0;
}
