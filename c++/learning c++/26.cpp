#include <iostream>
using namespace std;

class A
{
    public:
    void print(string s)
    {
        cout << "The function from class A" << endl;
    }
};

class B : public A
{
    public:
    void print()
    {   A::print("s");
        cout<<"The function from class B"<<endl;
    }
};

int main()
{
  B ob1;

  ob1.print();  
    ob1.A::print("d");



}