#include<iostream>
using namespace std;

int main()
{
    char op = '*';
    float num1,num2;
    do{
    cout<<"Enter Number 1 : ";
    cin>>num1;
    
    cout<<"Enter the Operator : ";
    cin>>op;

    cout<<"Enter Number 2 : ";
    cin>>num2;

    if(op == '+')
    {
        cout<<num1<<" + "<<num2<<" = "<< num1+num2<<endl;
    }
    else if(op == '-')
    {
        cout<<num1<<" - "<<num2<<" = "<< num1-num2<<endl;
    }
    
    else if(op == '/')
    {
        cout<<num1<<" / "<<num2<<" = "<< num1/num2<<endl;
    }
    else if(op == '*')
    {
        cout<<num1<<" * "<<num2<<" = "<< num1*num2<<endl;
    }
    
    else 
    {
        cout<<"Enter a valid Operator "<<endl;
    }
    }while(op!='*' &&op!='/' &&op!='-' &&op!='+'  );






    return 0;
}