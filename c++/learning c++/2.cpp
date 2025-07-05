#include<iostream>
using namespace std;

class Book
{
    public:
        string title;
        string author;
        int price ;
        int pages;
};

int main()
{
    Book b1;
    b1.title="C++ Level 1";
    b1.author="nanssy";
    b1.price=10;
    b1.pages=500;

    cout<<"Book1 "<<endl;
    cout<<"Book1 title" <<b1.title<<endl;
    cout<<"Book1 auther" <<b1.author<<endl;
    cout<<"Book1 price" <<b1.price<<endl;
    cout<<"Book1 pages" <<b1.pages<<endl;

     Book b2;
    b2.title="C++ Level two";
    b2.author="samerra";
    b2.price=25;
    b2.pages=1000;

    cout<<"-----------------"<<endl;

  cout<<"Book2 "<<endl;
    cout<<"Book2 title" <<b2.title<<endl;
    cout<<"Book2 auther" <<b2.author<<endl;
    cout<<"Book2 price" <<b2.price<<endl;
    cout<<"Book2 pages" <<b2.pages<<endl;

    return 0;
}