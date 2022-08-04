from urllib import request as rq



def main():
    url = "https://1000mostcommonwords.com/1000-most-common-italian-words/"
    rq.urlopen(url)




if __name__ == "__main__":
    main()