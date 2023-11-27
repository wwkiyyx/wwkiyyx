        [WebMethod]
        public void weixin()
        {
            if (Context.Request.HttpMethod == "GET")
            {
                if (Context.Request.QueryString.AllKeys.Contains("echostr"))
                {
                    Context.Response.Write(Context.Request.QueryString["echostr"]);
                    Context.Response.End();
                }
            }
            else if (Context.Request.HttpMethod == "POST")
            {
                if (Context.Request.QueryString.AllKeys.Contains("openid"))
                {
                    string openid = Context.Request.QueryString["openid"];
                    XmlDocument xml = new XmlDocument();
                    xml.Load(Context.Request.InputStream);
                    string ToUserName = xml.SelectSingleNode("/xml/ToUserName").InnerText;
                    string FromUserName = xml.SelectSingleNode("/xml/FromUserName").InnerText;
                    string CreateTime = xml.SelectSingleNode("/xml/CreateTime").InnerText;
                    string MsgType = xml.SelectSingleNode("/xml/MsgType").InnerText;
                    string Content = xml.SelectSingleNode("/xml/Content").InnerText;
                    string MsgId = xml.SelectSingleNode("/xml/MsgId").InnerText;
                    string message = "<xml>" +
                                    "<ToUserName><![CDATA[" + FromUserName + "]]></ToUserName>" +
                                    "<FromUserName><![CDATA[" + ToUserName + "]]></FromUserName>" +
                                    "<CreateTime>" + CreateTime + "</CreateTime>" +
                                    "<MsgType><![CDATA[" + MsgType + "]]></MsgType>" +
                                    "<Content><![CDATA[" + Content + "]]></Content>" +
                                    "</xml>";
                    Context.Response.Write(message);
                    Context.Response.End();
                }
            }
        }
