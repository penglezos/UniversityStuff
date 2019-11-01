#include <iostream>

using namespace std;

int main() {
    int n, number, i, sum = 0, plithos = 0;
    float avg;

    do {
        cout <<"DOSE PLITHOS ARITHMON: (>= 2" <<endl;
        cin >> n;
    }
    while (n < 2 );

    for(i=1; i<=n; i++) {
        cout <<"DOSE" <<i<<" O ARITHMO:" <<endl;
        cin >> number;

        if(number % 2 == 0) {
            sum += number;
            plithos ++;
        }
        avg = (float) sum / plithos;
        cout <<"MO:"<<  avg << endl;
        return 0;
    }
}
