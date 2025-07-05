#include<iostream>
using namespace std;

class Example
{
    public:
    int id;
    string name;
    int salary;

    void save(int i, string n , int s)
    {
        id=i;
        name=n;
        salary=s;
    }
    void display()
    {
        cout<<id<<endl;
        cout<<name<<endl;
        cout<<salary<<endl;
        
    }
};


int main()
{
    Example ob1;
    ob1.save(222,"iron",8000);
    ob1.display();
    return 0;
}

