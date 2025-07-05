#include <iostream>
using namespace std;

//        array of objects
int count = 1;
class Student
{
private:
    int m = 0;
    int n = 0;
    int p = 0;

public:
    void set()
    {
        cout << "Enter the value of M " << count << " : " << endl;
        cin >> m;

        cout << "Enter the value of N " << count << " : " << endl;
        cin >> n;

        cout << "Enter the value of P " << count << " : " << endl;
        cin >> p;
        count++;
    }

    void print()
    {
        cout << "M = " << m << endl;
        cout << "N = " << n << endl;
        cout << "P = " << p << endl;
    }
};

int main()
{
    Student ob[10];
    for (int x = 0; x < 10; x++)
    {
        cout << "------" << x + 1 << "-------" << endl;
        ob[x].set();
    }
    for (int x = 0; x < 10; x++)
    {
        cout << "------" << x + 1 << "-------" << endl;
        ob[x].print();
    }
}
