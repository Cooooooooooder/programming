#include<iostream>
using namespace std;

class Book
{
    public:
    int page;
    string name;

    Book()
    {
        cout<<"Iam a constructor"<<endl; 
    }

    void print()
    {
        cout<<page<<" "<<name<<endl;
    }

};

int main()
{
    Book ob1;
    Book ob2;
    ob1.name="C++";
    ob1.page=80;

    ob1.print();
}