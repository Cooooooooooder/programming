#include<iostream>
using namespace std;

class Book
{
    public:
        string title;
        int price;
        int pages;
        string author;

    void print()
    {
        cout<<"title : "<<title<<endl;
        cout<<"price : "<<price<<endl;
        cout<<"pages : "<<pages<<endl;
        cout<<"author : "<<author<<endl;
    }
    
};

int main()
{

    Book ob1;
    ob1.title="C++";
    ob1.price=100;
    ob1.pages=760;
    ob1.author="Nabil Elsheek";

    cout<<"this Book has :"<<ob1.pages<<" pages"<<endl;
    ob1.print();



    return 0;
}