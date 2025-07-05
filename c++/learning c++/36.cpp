#include<iostream>
using namespace std;

//@@                                            //friend class

class Student1
{
    private:
    string name;
    int mark;
    public:
    Student1(string n, int m)
    {
        name = n;
        mark = m;
    }
    void print()
    {
        cout<<"The name is : "<<name<<endl;
        cout<<"The mark is : "<<mark<<endl;
    }
    friend class Student2;
};

class Student2
{
    private:
    string name;
    int mark2;
    public:
    Student2(string n)
    {
        name = n;
    }
    void setMark(Student1 ob1)
    {
        mark2 = ob1.mark;
    }
    void print()
    {
        cout<<"The name is : "<<name<<endl;
        cout<<"The mark is : "<<mark2<<endl;
    }
};

int main()
{
    Student1 ob1("Sarwat", 440);
    Student2 ob2("maher");
    ob2.setMark(ob1);
    ob2.print();   


}