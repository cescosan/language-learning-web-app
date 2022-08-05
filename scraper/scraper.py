from urllib import request as rq


#on 1000mcw look for word 'number'; this is first first <tr>, first <td>

def main():
    url = "https://1000mostcommonwords.com/1000-most-common-italian-words/"
    rq.urlopen(url)
    




if __name__ == "__main__":
    main()