#include<iostream>
using namespace std;

class A
{   private:
    string name;
    int age;
    public :
    A(string n, int a)
    {
        name = n;
        age = a;
    }
     void print()
    {
        cout<<"Your name is "<<name<<endl;
        cout<<"Your age is "<<age<<endl;
    }
};
class B
{   private:
    string email;
    public:
    B(string e)
    {
        email = e;
    }
    void print()
    {
        cout<<"Your email is "<<email<<endl;
    }
};
class C : public A , public B
{
    private:
    int grade;
    public:
    C(string n, int a, string e, int g) : A(n,a) , B(e)
    {
        grade = g;
    }
    void print()
    { 
        //   A::print();
        //    B::print();
        cout<<"Your grade is "<<grade<<endl;
    
    }
};
int main()
{
    A ob1("Ahmed" , 20);
    B ob2("Ahmed@gmail.com");
    C ob3("Abdo", 30, "yaabdo@gmail.com", 80);
    ob3.A::print();
    ob3.B::print();
    ob3.print();
    

}