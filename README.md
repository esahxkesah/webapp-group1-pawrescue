# Group 1 (PawRescue)


| Name                                                              |  Matric No    |
| -------------                                                     | ------------- |
| SITI AISYAH BINTI ISMAIL                                          |   2010912     |
| NABILAH HAKIM BINTI NAZRI                                         |   2013672     |
| NUR SYAFINI BINTI ISMAIL                                          |   2018028     |
| NUR SARAH NAJIHAH BINTI ZULKAFLI                                  |   2013650     |


# PawRescue Website Application

## Table of Contents
<ol>
  <li>Introduction</li>
  <li>Objective</li>
  <li>Features & Functionalities</li>
  <li>ERD Diagram & Relationship</li>
  <li>Sequence Diagram</li>
  <li>References</li>
</ol>

## Introduction

In our country, Malaysian citizens must at least once see a quite number of cats and dogs roaming around looking so smudged and pitiful on the street when we are outside, especially at the outdoor restaurant, park, neighborhood and so on. They are considered and called stray animals that can include lost animals that were unable to find their way home, street animals that are born and breed on the streets and have never been owned, or abandoned animals that are no longer desired and are left on the streets or brought to a shelter by their owner. Stray animals are not limited to just cats and dogs but it also can be an exotic pet like fennec fox and hedgehog that stray around without observation. Reproduction among stray animals that gets out of hand can raise their number and will cause a lot of complications which increases the likelihood of predation, auto accidents, the spread of zoonotic illnesses, and hence, their potential to serve as disease vectors. 

One of our proposed approaches is by making an web application to help, save, protect the animals and the environment which is called PawRescue. PawRescue web application will work together with animal shelters to help stray animals to get treated, to get helped and to get protected. This web application also is going to have some user-friendly features and information that everybody can use. We are gonna post and update the upcoming events concerning the stray animals’ welfare aside from adoption and volunteer feature and our rescued pets information. For the adopt feature, users can adopt animals that they find adorable for free by using their registered account which can also be made for free. The event feature will be prepared for those who voluntarily want to take part in our operation officially. Other than that, users can also make a report on any concerning animals that need help that they witness.


## Objective

The objective of PawRescue web application project is to create a better community which includes the environment and animals through application technology and to gather voluntary society who are in for the better sake of stray animals in our society.

## Features & Functionalities

There will be 2 users for our website:
1. Members
2. Staff

### Members
| Features                         |  Functionalities   |
| -------------                    | -------------      |
| Profile                          |Profile section for members will be created using jetstream, where members can create their own profile by fill in their informations such as name, phone number, email, address, and etc.|
| Homepage                         |The first page that visitors see when they load our URL. Members can only view all the information on the homepage, they cannot add or customize any articles, videos and etc.|
| Adoption                         |Members can only view and fill in the adoption form on this page if they want to adopt a pet.|
| Events                           |Members can only view and fill in the event form on this page if they want to participate in the event.|
| Reports                          |Members can only view and fill in the report form on this page if they want to make a report.|

### Staff
| Features                         |  Functionalities   |
| -------------                    | -------------      |
| Profile                          |Profile section for staff will be created using jetstream, where staff can create their own profile by fill in their informations such as name, phone number, email, address, and etc.|
| Adoption                         |Staff can customize the adoption page by create, read, update, and delete any data on the adoption list.|
| Events                           |Staff can customize the event page by create, read, update, and delete any data on the event list.|
| Reports                          |Staff can customize the report page by create, read, update, and delete any data on the report list.|

## ERD Diagram & Relationship
![Entity Relationship Diagram ](https://user-images.githubusercontent.com/83501001/209619423-bd660844-5f9e-437d-8894-933ad1e96635.png)


### In the database system, we have 6 tables which are:
1. Account
2. Participation
3. Report
4. Adoption
5. Event
6. Pet

### The relationship between each entity
1) Account and Participation : an Account can have zero or many Participations and one Participation must only belong to one Account 
2) Account and Report : an Account can make zero or many Reports and one Report must only belong to one Account
3) Account and Adoption : an Account can have zero or many Adoptions and one Adoption must only belong to one Account
4) Participation and Event : a Participation must only belong to one Event and Event can have zero or many Participations
5) Adoption and Pet : an Adoption must only have one Pet and a Pet can have zero or only one Adoption


## Sequence Diagram
### Member Role
![Sequence diagram - Copy of Sequence diagram (1)](https://user-images.githubusercontent.com/68623558/209470668-4966014a-c821-47fa-a266-4a8131fb9f9a.png)

### Staff Role
![Sequence diagram - Copy of Copy of Sequence diagram (1)](https://user-images.githubusercontent.com/68623558/209470671-96c464c9-0c59-4058-b3d8-8312bb94951a.png)

##Project System Captured

##Challenges & Difficutlties 

## References

<ol>
  <li>UML sequence diagram tutorial. Lucidchart. (n.d.). Retrieved December 28, 2022, from https://www.lucidchart.com/pages/uml-sequence-diagram </li>
  <li>What is an entity relationship diagram (ERD)? Lucidchart. (n.d.). Retrieved December 28, 2022, from https://www.lucidchart.com/pages/er-diagrams </li>
</ol>


