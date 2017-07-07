import sys
from collections import defaultdict
import itertools

def citemset_creation(st):
    clist= set([i.union(j) for i in st for j in st if len(i.union(j))==(len(i)+1)])
    return clist

def support_evaulation(i_list,all_transs):
    i_freq=[defaultdict(int)]
    list=[];
    occur=[defaultdict(int)]
    for itemset, freq in i_list.items():
        support= float(freq)/len(all_trans)
        if support >= min_support:
            i_freq.append([itemset,freq])
            list.append(itemset)
            occur.append(freq)
    return list, i_freq, occur

def item_occurence(clist, all_trans):
    c_f_list= [defaultdict(int)]
    clist=[clist]
    for itemset in all_trans:
        for item in clist:
            for one in item:
                if (one.issubset(itemset)):
                    c_f_list[0][one] += 1
    return c_f_list

#def subs(list):
#    if list == []:
#        return [[]]
#    x = subs(list[1:])
#    return x + [[list[0]] + y for y in x]


def confidence_evaluation(item,all_trans,flist):
    for list in flist:
       if( item == list[0]):
           conf_sup = (float)(list[1] / len(all_trans))
           return conf_sup 

def association_rule(st,l_f,all_trans ,min_confidence,flist):
    association = []
    print("*******Association Rules Determined:")
    for item in st:
        n=1
        while(n<len(l_f)):
            for subsets in itertools.combinations(frozenset(item),n):
                if(frozenset(subsets)!=item):
                    confidence = confidence_evaluation(item,all_trans,flist)/confidence_evaluation(frozenset(subsets),all_trans,flist)
                    if (confidence >= min_confidence):
                        if [item, frozenset(subsets), confidence] in association:
                            continue
                        else:
                            association.append([item, frozenset(subsets), confidence])
            n += 1
    return association

#def clitemset_creation(List,l ):
#    cList=[defaultdict(int)]
#    for i in range(l):
#        for j in range(i + 1, l):
#            cList.append([List[i].union(List[j])])
#    return cList

def list_creation(st,l_f,f_l, all_trans, flist):
    if(len(st)>=2):
            candidate_list = citemset_creation(st)
            clist = item_occurence(candidate_list, all_trans)
            print("*******Candidate List c:")
            print(clist)
            L, l_f, Lfreq = support_evaulation(clist[0], all_trans)
            print("********Frequent itemset list L:")
            print(l_f)
            if(len(L)<1):
                return st ,l_f, f_l,flist
            else:
                flist.extend(l_f)
                return list_creation(L,l_f,Lfreq, all_trans,flist) # looping the same fn over until exhausted
    return st,l_f,freqL,flist


if __name__ == "__main__":
    length= len(sys.argv)
    if(length>3):
        input_set = sys.argv[1]
        min_support = float(sys.argv[2])
        min_confidence = float(sys.argv[3])
    else:
        print("Please enter the correct format")

    with open(input_set) as f:
        record= f.readlines()
        f.close()
    all_trans = []
    flist= [defaultdict(int)]
    itemsets = [defaultdict(int)]
    for row in record:
        all_trans.append(frozenset(row.split()))
    for transaction in all_trans:
        for item in transaction:
            itemsets[0][frozenset([item])]+=1

    print("*******Candidate List c:")
    print(itemsets[0])
    List, List_freq, freqL = support_evaulation(itemsets[0],all_trans)

    print("********Frequent itemset list L:")
    print(List_freq)
    flist.extend(List_freq)
    list, list_freq, lfreq, flist = list_creation(List, List_freq, freqL, all_trans,flist)

    print("********Transaction subset items and frequencies to be considered:")
    print(flist)
    association_rules = association_rule(list, lfreq, all_trans, min_confidence, flist)
    for item, subitem,confidence in association_rules:
        if  subitem.issubset(item):
            print("Confidence: %s,  rule: %s ->%s" %(confidence,subitem,item.difference(subitem)))