#include <iostream>
#include <windows.h>
using namespace std;

char Matrix[3][3] = {'1', '2', '3', '4', '5', '6', '7', '8', '9'};
char position = 'i';
char player = 'X';
int checkexist = 0;

void printFirst()
{
    for (int i = 0; i < 3; i++)
    {
        cout << "| ";
        for (int j = 0; j < 3; j++)
        {
            cout << Matrix[i][j] << " ";
        }
        cout << "|";
        cout << endl;
    }
}

void replace()
{
    int checkexist = 0;
    cout << "Enter The Position  Player " << player << " : ";
    cin >> position;
    while (position < '0' || position > '9')
    {
        cout << "Try Again!   Enter The Position  Player " << player << " : ";
        cin >> position;
    }
    for (int i = 0; i < 3; i++)
    {
        for (int j = 0; j < 3; j++)
        {
            if (Matrix[i][j] == position)
            {
                checkexist++;
            }
        }
    }
    while (checkexist == 0)
    {
        cout << "Position doesn't exist!   Enter The Position  Player " << player << " : ";
        cin >> position;
        while (position < '1' || position > '9')
        {
            cout << "Try Again!   Enter The Position  Player " << player << " : ";
            cin >> position;
        }
        for (int i = 0; i < 3; i++)
        {
            for (int j = 0; j < 3; j++)
            {
                if (Matrix[i][j] == position)
                {
                    checkexist++;
                }
            }
        }
    }

    system("cls");
    for (int i = 0; i < 3; i++)
    {
        cout << "| ";
        for (int j = 0; j < 3; j++)
        {
            if (Matrix[i][j] == position)
            {
                Matrix[i][j] = player;
                cout << Matrix[i][j] << " ";
            }
            else
            {
                cout << Matrix[i][j] << " ";
            }
        }
        cout << "|";
        cout << endl;
    }
    if (player == 'X')
    {
        player = 'O';
    }
    else
    {
        player = 'X';
    }
}

char check()
{
    if (Matrix[0][0] == 'X' && Matrix[0][1] == 'X' && Matrix[0][2] == 'X')
    {
        return 'X';
    }
    else if (Matrix[1][0] == 'X' && Matrix[1][1] == 'X' && Matrix[1][2] == 'X')
    {
        return 'X';
    }
    else if (Matrix[2][0] == 'X' && Matrix[2][1] == 'X' && Matrix[2][2] == 'X')
    {
        return 'X';
    }
    else if (Matrix[0][0] == 'O' && Matrix[0][1] == 'O' && Matrix[0][2] == 'O')
    {
        return 'O';
    }
    else if (Matrix[1][0] == 'O' && Matrix[1][1] == 'O' && Matrix[1][2] == 'O')
    {
        return 'O';
    }
    else if (Matrix[2][0] == 'O' && Matrix[2][1] == 'O' && Matrix[2][2] == 'O')
    {
        return 'O';
    }

    else if (Matrix[0][0] == 'X' && Matrix[1][0] == 'X' && Matrix[2][0] == 'X')
    {
        return 'X';
    }
    else if (Matrix[0][1] == 'X' && Matrix[1][1] == 'X' && Matrix[2][1] == 'X')
    {
        return 'X';
    }
    else if (Matrix[0][2] == 'X' && Matrix[1][2] == 'X' && Matrix[2][2] == 'X')
    {
        return 'X';
    }
    else if (Matrix[0][0] == 'O' && Matrix[1][0] == 'O' && Matrix[2][0] == 'O')
    {
        return 'O';
    }
    else if (Matrix[0][1] == 'O' && Matrix[1][1] == 'O' && Matrix[2][1] == 'O')
    {
        return 'O';
    }
    else if (Matrix[0][2] == 'O' && Matrix[1][2] == 'O' && Matrix[2][2] == 'O')
    {
        return 'O';
    }
    else if (Matrix[0][0] == 'X' && Matrix[1][1] == 'X' && Matrix[2][2] == 'X')
    {
        return 'X';
    }
    else if (Matrix[0][2] == 'X' && Matrix[1][1] == 'X' && Matrix[2][0] == 'X')
    {
        return 'X';
    }
    else if (Matrix[0][0] == 'O' && Matrix[1][1] == 'O' && Matrix[2][2] == 'O')
    {
        return 'O';
    }
    else if (Matrix[0][2] == 'O' && Matrix[1][1] == 'O' && Matrix[2][0] == 'O')
    {
        return 'O';
    }
    int counter = 0;

    for (int i = 0; i < 3; i++)
    {
        for (int j = 0; j < 3; j++)
        {
            if (Matrix[i][j] != 'X' && Matrix[i][j] != 'O')
            {
                counter++;
            }
        }
    }
    if (counter == 0)
    {
        return '=';
    }
    return '*';
}

int main()
{

    printFirst();
    while (true)
    {
        replace();
        check();
    }
    if (check() == 'X')
    {
        cout << "The Winner Player is : " << check() << endl;
    }
    else if (check() == 'O')
    {
        cout << "The Winner Player is : " << check() << endl;
    }
    if (check() == '=')
    {
        cout << "The Winner Player is : " << check() << endl;
    }
    return 0;
}
