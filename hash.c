#include<stdio.h>
#include<stdlib.h>
#include<string.h>
#include<stdbool.h>

int arraySize  = 0;
int noofelement = 0;

typedef struct node 
{
	char *element,*name;
}node;

void init(node *array[])
{
	int i =0;
	while(i != arraySize)
	{
		array[i] = NULL;
		i++;
	}
}

int hashcode(char *key)
{
	if(*key == '\0')
	{
		return 0;
	}
	else
	{
		return ((int)(*key) + (37*(hashcode(key + 1))));
	}
}

int hash(char *key)
{
	int hash = (hashcode(key) + 1) % arraySize;
	return hash;
}

node *createnode(char *element,char *name)
{
	node *newnode = (node*)malloc(sizeof(node));
	newnode->element = element;
	newnode->name = name;
	
	return newnode;
}

void insert(char *element,char *name,node *array[])
{
	if(noofelement != arraySize)
	{
		int index = hash(element);
		int count,i;
		i = count = 0;
		while(count != arraySize)
		{
			if(array[index] == NULL)
			{
				array[index] = createnode(element,name);
				noofelement++;
				printf("Insert SUCCESSFULL\n");
				break;
			}
			count++;
			i++;
			index = (index + (i*i))%arraySize;
		}

	}
	else
	{
		printf("ARRAY IS OVERFLOW!\n");
	}
}

void search(char *element,node *array[])
{
	if(noofelement != 0)
	{
		int index = hash(element);
		int count,i;
		i = count = 0;
		bool flag = true;
		while(count != arraySize)
		{
			if(strcmp(array[index]->element,element) == 0)
			{
				printf("%d \t%s \t%s \n",index,array[index]->element,array[index]->name);
				flag = false;
				break;
			}
			count++;
			i++;
			index = (index + (i*i))%arraySize;
		}
		if(flag)
		{
			printf("CAN'T FIND THE WORD!\n");
		}

	}
	else
	{
		printf("ARRAY IS EMPTY!\n");
	}
}


void print(node *array[])
{
	int i = 0;
	printf("Loca\tElement\tName\n");
	while(i != arraySize)
	{	
		if(array[i] != NULL)
		{
			printf("%d\t%s\t%s\n",i,array[i]->element,array[i]->name);
		}
		i++;
	}
}
int main()
{
	int option = 0;
	printf("Enter the array size :");
	scanf("%d",&arraySize);
	node *array[arraySize];
	init(array);
	while(option != 5)
	{
		printf("1.insert\n2.search\n3.count\n4.view\n5.exit\n");
		printf("\n Enter your option :");
		scanf("%d",&option);
		getchar();
		
		switch(option)
		{
			case 1:{
				char *element = (char*)malloc(sizeof(char) * 11);
				char *name = (char*)malloc(sizeof(char) * 31);
				printf("Enter the element :");
				fgets(element,10,stdin);
				printf("Enter the name :");
				fgets(name,30,stdin);
				insert(element,name,array);
				break;
			}
			case 2:{
				char *element = (char*)malloc(sizeof(char) * 11);
				printf("Enter the element :");
				fgets(element,10,stdin);
				search(element,array);
				break;
			}
			case 3:{
				printf("Curently stored chemical count is %d\n",noofelement);
				break;
			}
			case 4:{
				print(array);
				break;
			}
			case 5:{
				break;
			}
			default:{
				printf("INVALID!\n");
				break;
			}
		}
	}
	
	
	return 0;
}
