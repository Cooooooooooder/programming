#include<iostream>
using namespace std;

class Circle
{
    private:
    float area;
    float radius;

    public:
    void set()
    {
        cout<<"Enter the radius : "<<endl;
        cin>>radius;
    }

    void print()
    {
        area = 3.14 * radius * radius;
        cout<<"The Area is : "<<area<<endl;

    }

};

int main()
{
    Circle ob1;
    ob1.set();
    ob1.print();

    return 0;
}